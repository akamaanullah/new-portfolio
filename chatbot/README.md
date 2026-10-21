# AK Chatbot widget (UI only)

Files: `chatbot.css`, `chatbot.js` (vanilla, no deps), `chatbot-snippet.html`, `chatbot-demo.html`.

## Install
1. Copy this folder to `public/chatbot/`.
2. Add `<meta name="csrf-token" content="{{ csrf_token() }}">` in `<head>`.
3. Paste `chatbot-snippet.html` before `</body>` (or in your Blade layout).

## Config (`window.AK_CHATBOT_CONFIG`, set before chatbot.js)
| key | default | note |
|---|---|---|
| endpoint | null | **null = DEMO mock** (canned replies in `chatbot.js`, block marked `DEMO MOCK`) |
| leadEndpoint | null | lead form POST target (name, email, session_id, history) |
| botName | `[Bot Name]` | EDIT |
| whatsapp | `https://wa.me/[NUMBER]` | "Talk to a human" menu link — EDIT |
| poweredBy / poweredUrl | placeholder | footer |
| greetingDelay | 4000 | tooltip delay (ms), dismissed per session |
| maxChars | 500 | input limit |
| timeout | 20000 | request timeout (ms) |

## Contract
`ChatbotAPI.send({message, history, session_id}) -> Promise<reply>`
POST JSON to `endpoint` with `X-CSRF-TOKEN` header. Response:
```json
{ "reply": "Markdown-lite: **bold**, [link](url), - lists, 1. lists",
  "chips": ["Get a quote"],
  "cards": [{"tag":"Service","title":"CRM","text":"...","button":"View","url":"/services"}],
  "lead": false }
```
`lead: true` shows the inline name/email card. Non-2xx / timeout shows the error bubble with Retry.
JS API: `AKChatbot.open() / close() / send(text)`; `AKChatbot.demo.fail = true` previews the error state.
State (messages, open, unread) persists in sessionStorage.

## Laravel sketch
```php
// routes/web.php
Route::post('/chatbot/message', [ChatbotController::class, 'message'])->middleware('throttle:30,1');
Route::post('/chatbot/lead',    [ChatbotController::class, 'lead'])->middleware('throttle:5,1');

// app/Http/Controllers/ChatbotController.php
class ChatbotController extends Controller {
    public function message(Request $r) {
        $data = $r->validate([
            'message' => 'required|string|max:500',
            'history' => 'array|max:20',
            'session_id' => 'required|string|max:64',
        ]);
        $reply = app(\App\Services\TrainedBot::class)->ask($data); // your bot
        return response()->json(['reply' => $reply['text'], 'chips' => $reply['chips'] ?? [], 'cards' => $reply['cards'] ?? [], 'lead' => $reply['lead'] ?? false]);
    }
    public function lead(Request $r) {
        $data = $r->validate(['name' => 'required|max:120', 'email' => 'required|email', 'session_id' => 'required|max:64']);
        \App\Models\Lead::create($data + ['source' => 'chatbot']);
        return response()->json(['ok' => true]);
    }
}
```

## Notes
Mobile (≤560px): full-screen sheet, swipe header down to close, height follows `visualViewport` (keyboard).
A11y: dialog role, aria-live messages, focus trap, Esc closes, prefers-reduced-motion disables animation.
