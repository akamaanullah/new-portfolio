/**
 * ============================================================================
 * Amaanullah — Web Developer & Software Solutions Portfolio
 * Main Interactive Engine (js/main.js)
 * ============================================================================
 */

import * as THREE from 'three';
import { RoomEnvironment } from 'three/addons/environments/RoomEnvironment.js';
import { RoundedBoxGeometry } from 'three/addons/geometries/RoundedBoxGeometry.js';
import { EffectComposer } from 'three/addons/postprocessing/EffectComposer.js';
import { RenderPass } from 'three/addons/postprocessing/RenderPass.js';
import { UnrealBloomPass } from 'three/addons/postprocessing/UnrealBloomPass.js';
import { OutputPass } from 'three/addons/postprocessing/OutputPass.js';
import { CSS2DRenderer, CSS2DObject } from 'three/addons/renderers/CSS2DRenderer.js';

/* ============================================================================
   0. SPLASH / WELCOME SCREEN 3D ENGINE
   ============================================================================ */
function initSplash() {
// ===== SPLASH PORTAL (wormhole variant; runs before the hero; disposes itself on exit) =====

const root=document.documentElement,el=document.getElementById('splash');
if(!el||!root.classList.contains('splashing')){el&&el.remove();root.classList.remove('splash-on');return}

el.classList.add('sportal');
const Q=new URLSearchParams(location.search);if(Q.has('splashT'))window.__splashT=+Q.get('splashT');
const RM=matchMedia('(prefers-reduced-motion: reduce)').matches,MOB=innerWidth<700;
const MIN=RM?1200:7000,MAX=9000,T0=performance.now();
// --- real loading progress: fonts, window load, hero first frame
const P={fonts:0,load:0};
document.fonts&&document.fonts.ready.then(()=>P.fonts=1);
if(document.readyState==='complete')P.load=1;else addEventListener('load',()=>P.load=1);
const realP=()=>(P.fonts*.3+P.load*.4+(window.__heroReady?1:0)*.3);
const pctEl=document.getElementById('sPct'),bar=document.getElementById('sBar');let shown=0,done=false;
// --- name decode
const NAME='Amaanullah.',nameEl=document.getElementById('sName');
NAME.split('').forEach(c=>{const s=document.createElement('span');s.textContent=c;if(c==='.')s.className='dot';s.setAttribute('aria-hidden','true');nameEl.appendChild(s)});
const GL='{}<>/;=#*01ABXZ$';
function scramble(){[...nameEl.children].forEach((s,i)=>{const fin=s.textContent;let n=0;setTimeout(()=>{s.classList.add('on','scr');const iv=setInterval(()=>{s.textContent=GL[Math.random()*GL.length|0];if(++n>6+i){clearInterval(iv);s.textContent=fin;s.classList.remove('scr')}},40)},i*60)})}
// --- optional sound, tied to the site's sound toggle (off by default)
function chime(){try{if(localStorage.getItem('sound')!=='on')return;const a=new AudioContext(),o=a.createOscillator(),g=a.createGain();o.type='sine';o.frequency.setValueAtTime(160,a.currentTime);o.frequency.exponentialRampToValueAtTime(960,a.currentTime+.7);g.gain.setValueAtTime(.0001,a.currentTime);g.gain.exponentialRampToValueAtTime(.05,a.currentTime+.12);g.gain.exponentialRampToValueAtTime(.0001,a.currentTime+1.1);o.connect(g).connect(a.destination);o.start();o.stop(a.currentTime+1.1)}catch(e){}}
function finish(){try{sessionStorage.setItem('splashSeen','1')}catch(e){}root.classList.remove('splashing');window.dispatchEvent(new Event('splashend'))}
document.getElementById('sSkip').onclick=()=>exit(true);
addEventListener('keydown',function k(e){if(e.key==='Escape'){removeEventListener('keydown',k);exit(true)}});
// --- reduced motion: simple fade
if(RM){el.classList.add('rm','t1','t3');[...nameEl.children].forEach(s=>s.classList.add('on'));
 const tick=()=>{const t=performance.now()-T0;shown=Math.round(Math.min(realP(),t/MIN)*100);pctEl.textContent=shown;bar.style.width=shown+'%';if((realP()>=1&&t>=MIN)||t>=MAX)exit();else if(!done)requestAnimationFrame(tick)};tick();
 var exit=()=>{if(done)return;done=true;finish();el.style.transition='opacity .5s';el.style.opacity=0;setTimeout(()=>{el.remove();root.classList.remove('splash-on')},550)};return}

// --- WebGL scene (camera stays at the origin looking down -Z; the tunnel flows toward it)
const canvas=document.getElementById('splashC');
const R=new THREE.WebGLRenderer({canvas,antialias:!MOB,powerPreference:'high-performance'});R.setPixelRatio(Math.min(devicePixelRatio,MOB?1.5:2));
const BGD=new THREE.Color(0x0a0706),BGO=new THREE.Color(0xf07a2e),BGP=new THREE.Color(0xffc9a2),BGW=new THREE.Color(0xfff0dc),BGC=new THREE.Color(0xfbf4ec);
const scene=new THREE.Scene();scene.background=BGD.clone();const FOV0=48;const cam=new THREE.PerspectiveCamera(FOV0,1,.05,200);
scene.add(new THREE.AmbientLight(0xffffff,.6));const dl=new THREE.DirectionalLight(0xffffff,1.4);dl.position.set(3,5,6);scene.add(dl);
const comp=new EffectComposer(R);comp.addPass(new RenderPass(scene,cam));const bloom=new UnrealBloomPass(new THREE.Vector2(1,1),.75,.45,.72);comp.addPass(bloom);comp.addPass(new OutputPass());
function size(){const w=innerWidth,h=innerHeight;R.setSize(w,h,false);comp.setSize(w,h);cam.aspect=w/h;cam.updateProjectionMatrix();window.__fitP&&window.__fitP()}size();addEventListener('resize',size);
const ctex=(draw,w=128,h=128)=>{const c=document.createElement('canvas');c.width=w;c.height=h;draw(c.getContext('2d'),w,h);const t=new THREE.CanvasTexture(c);t.colorSpace=THREE.SRGBColorSpace;return t};
const dotT=ctex((g,w,h)=>{const r=g.createRadialGradient(w/2,h/2,0,w/2,h/2,w/2);r.addColorStop(0,'rgba(255,255,255,1)');r.addColorStop(.25,'rgba(255,205,160,.75)');r.addColorStop(1,'rgba(255,140,60,0)');g.fillStyle=r;g.fillRect(0,0,w,h)},64,64);
const ADD={transparent:true,depthWrite:false,blending:THREE.AdditiveBlending};
const sm=(a,b,t)=>{t=Math.min(Math.max((t-a)/(b-a),0),1);return t*t*(3-2*t)};
// distance travelled: speed eases from 0 (t=.9) to VMAX (t=.9+RAMP), closed form so the timeline is frame-rate independent
// speed eases up after the dive and dips smoothly at each project focus; distance is integrated once into a table
const VMAX=MOB?30:34,TS=.9,RAMP=1.5,DIP=.74,FT=[2.7,3.6,4.5,5.4,6.3];
const vel=t=>{let b=0;for(let k=0;k<5;k++){const x=(t-FT[k]-.05)/.32;b+=Math.exp(-x*x)}return VMAX*sm(TS,TS+RAMP,t)*(1-DIP*Math.min(b,1))};
const DTS=1/240,NT=12*240+1,DTab=new Float32Array(NT);for(let i=1;i<NT;i++)DTab[i]=DTab[i-1]+(vel((i-1)*DTS)+vel(i*DTS))*.5*DTS;
const D=t=>{if(t<=0)return 0;const f=t/DTS;if(f>=NT-1)return DTab[NT-1]+VMAX*(t-(NT-1)*DTS);const i=f|0;return DTab[i]+(DTab[i+1]-DTab[i])*(f-i)};
const SPD=t=>vel(t)/VMAX;
const L=80,RAD=3.2,RING_Z=-5.5;
// --- portal ring
const portal=new THREE.Group();scene.add(portal);
const RR=1.35,rp=[];for(let i=0;i<=200;i++){const a=i/200*Math.PI*2+Math.PI/2;rp.push(new THREE.Vector3(Math.cos(a)*RR,Math.sin(a)*RR,0))}
const ringLine=new THREE.Line(new THREE.BufferGeometry().setFromPoints(rp),new THREE.LineBasicMaterial({color:0xffc89a,...ADD}));ringLine.geometry.setDrawRange(0,0);portal.add(ringLine);
const ringGlowT=ctex((g,w,h)=>{const r=g.createRadialGradient(w/2,h/2,w*.30,w/2,h/2,w*.5);r.addColorStop(0,'rgba(255,120,30,0)');r.addColorStop(.44,'rgba(255,130,50,.35)');r.addColorStop(.5,'rgba(255,236,214,1)');r.addColorStop(.56,'rgba(255,120,30,.35)');r.addColorStop(1,'rgba(255,90,20,0)');g.fillStyle=r;g.fillRect(0,0,w,h)},256,256);
const ringGlow=new THREE.Sprite(new THREE.SpriteMaterial({map:ringGlowT,...ADD,opacity:0}));ringGlow.scale.setScalar(4.1);portal.add(ringGlow);
// energy swirl + shimmer inside the ring
const swirlU={uT:{value:0},uO:{value:0}};
const swirl=new THREE.Mesh(new THREE.CircleGeometry(RR*1.02,64),new THREE.ShaderMaterial({uniforms:swirlU,...ADD,
 vertexShader:'varying vec2 vU;void main(){vU=uv*2.-1.;gl_Position=projectionMatrix*modelViewMatrix*vec4(position,1.);}',
 fragmentShader:`uniform float uT,uO;varying vec2 vU;void main(){float r=length(vU),a=atan(vU.y,vU.x);
  float sp=sin(a*3.-r*9.+uT*4.+sin(r*14.-uT*3.)*.35);float arms=smoothstep(.2,1.,sp)*.8;
  float shim=.5+.5*sin(r*40.-uT*9.+a*2.);float edge=smoothstep(1.,.75,r);float core=smoothstep(.55,0.,r);
  vec3 c=mix(vec3(1.,.42,.12),vec3(.75,.68,1.),smoothstep(.2,.9,r)*.45);c=mix(c,vec3(1.,.95,.88),core*.6);
  float al=(arms*(.25+.35*r)+shim*.06+core*.35)*edge*uO;gl_FragColor=vec4(c*al,al);}`}));portal.add(swirl);
// sparks thrown off the ring (deterministic from t: no per-frame allocation)
const NS=MOB?160:340,sPos=new Float32Array(NS*3),sSeed=new Float32Array(NS*3);for(let i=0;i<NS;i++){sSeed[i*3]=Math.random()*Math.PI*2;sSeed[i*3+1]=Math.random();sSeed[i*3+2]=.6+Math.random()*1.2}
const sg=new THREE.BufferGeometry();sg.setAttribute('position',new THREE.BufferAttribute(sPos,3));
const sparkM=new THREE.PointsMaterial({size:.07,map:dotT,color:0xffb070,...ADD,opacity:0});portal.add(new THREE.Points(sg,sparkM));
portal.position.z=RING_Z;
// fit the portal (and text-safe area) to any viewport: ring stays fully visible and centred
function fitPortal(){const hh=Math.abs(RING_Z)*Math.tan(THREE.MathUtils.degToRad(FOV0/2)),hw=hh*cam.aspect;portal.scale.setScalar(Math.min(1,.52*Math.min(hw,hh)/(RR*1.25)))}fitPortal();window.__fitP=fitPortal;
// --- tunnel: open cylinder with flowing energy lanes (shader), fades into the distance
const tunU={uT:{value:0},uD:{value:0},uO:{value:0},uCut:{value:RING_Z},uS:{value:0}};
const tg=new THREE.CylinderGeometry(RAD,RAD,L,MOB?40:64,1,true);tg.rotateX(Math.PI/2);tg.translate(0,0,-L/2+2);
const tunnel=new THREE.Mesh(tg,new THREE.ShaderMaterial({uniforms:tunU,side:THREE.BackSide,...ADD,
 vertexShader:'varying vec3 vW;varying vec2 vU;void main(){vU=uv;vW=position;gl_Position=projectionMatrix*modelViewMatrix*vec4(position,1.);}',
 fragmentShader:`uniform float uT,uD,uO,uCut,uS;varying vec3 vW;varying vec2 vU;
  float h1(float n){return fract(sin(n*91.73)*43758.55);}
  void main(){if(vW.z>uCut)discard;float q=vW.z-uD;float a=fract(vU.x+q*.004+uT*.01)*56.;float id=floor(a),f=fract(a);
   float h=h1(id),lane=pow(1.-abs(f-.5)*2.,10.);
   float d=fract(q*(.012+h*.02)+h*7.+uT*.05);float len=.18+uS*.5;float seg=smoothstep(0.,.04,d)*(1.-smoothstep(len*.5,len,d));
   vec3 c=h<.55?vec3(1.,.45,.13):h<.8?vec3(1.,.93,.84):vec3(.72,.66,1.);
   float depth=-vW.z;float fade=smoothstep(L_,18.,depth)*smoothstep(-1.,4.,depth);
   float haze=.05+.04*sin(q*.15+vU.x*25.);
   float al=(lane*seg*(.55+.45*h)+haze)*fade*uO;gl_FragColor=vec4(c*al,al);}`.replace('L_','78.')}));
scene.add(tunnel);
// --- concentric ring segments flowing past
const segs=[];const NSEG=MOB?8:14;for(let i=0;i<NSEG;i++){const th=1.2+Math.random()*2.6;const m=new THREE.Mesh(new THREE.RingGeometry(RAD*.93,RAD*.96,64,1,0,th),new THREE.MeshBasicMaterial({color:i%4===0?0xb9b0ff:i%3?0xff8a3d:0xfff0e0,...ADD,opacity:0,side:THREE.DoubleSide}));m.rotation.z=Math.random()*Math.PI*2;m.userData={z0:i*(L/NSEG),w:(Math.random()-.5)*.6};scene.add(m);segs.push(m)}
// --- warp streaks (line segments stretched by speed)
const NK=MOB?280:650,kp=new Float32Array(NK*6),kc=new Float32Array(NK*6),kd=new Float32Array(NK*3);
const cO=new THREE.Color(0xff7a2a),cW=new THREE.Color(0xfff2e4),cL=new THREE.Color(0xa99cff);
for(let i=0;i<NK;i++){const a=Math.random()*Math.PI*2,r=.7+Math.pow(Math.random(),.5)*(RAD-.9);kd[i*3]=a;kd[i*3+1]=r;kd[i*3+2]=Math.random()*L;const c=Math.random()<.5?cO:Math.random()<.7?cW:cL;
 kc[i*6]=c.r;kc[i*6+1]=c.g;kc[i*6+2]=c.b;kc[i*6+3]=c.r*.05;kc[i*6+4]=c.g*.05;kc[i*6+5]=c.b*.05;kp[i*6]=kp[i*6+3]=Math.cos(a)*r;kp[i*6+1]=kp[i*6+4]=Math.sin(a)*r}
const kg=new THREE.BufferGeometry();kg.setAttribute('position',new THREE.BufferAttribute(kp,3));kg.setAttribute('color',new THREE.BufferAttribute(kc,3));
const streakM=new THREE.LineBasicMaterial({vertexColors:true,...ADD,opacity:0});const streaks=new THREE.LineSegments(kg,streakM);streaks.frustumCulled=false;scene.add(streaks);
// --- code glyphs drifting on the walls
const glyphs=[];['{ }','</>',';','=>','[ ]','#','( )','01','/>','&&'].forEach((ch,k)=>{const t=ctex((g,w,h)=>{g.font='bold 54px monospace';g.textAlign='center';g.textBaseline='middle';g.shadowColor='#ff7a2a';g.shadowBlur=14;g.fillStyle=k%3?'#ffb27a':'#fff4e8';g.fillText(ch,w/2,h/2)});
 for(let j=0;j<(MOB?1:2);j++){const s=new THREE.Sprite(new THREE.SpriteMaterial({map:t,...ADD,opacity:0}));const a=Math.random()*Math.PI*2;s.position.set(Math.cos(a)*RAD*.82,Math.sin(a)*RAD*.82,0);s.userData={z0:Math.random()*L};s.scale.setScalar(.55);scene.add(s);glyphs.push(s)}});
// --- project panels (glass cards with the placeholder screenshots)
// EDIT: project names + category tags shown during the fly-by focus
const PRJ=[['crm-1.svg','Multi-tenant CRM','CRM Platform'],['chatrox.svg','Chatrox','Chat Application'],['rtg-workspace.svg','RTG Workspace','Web Application'],['it-hardware-bin.svg','IT Hardware Bin','E-Commerce'],['landsfy.svg','Landsfy','Web Application']];
// panels alternate left/right, slightly below the camera path; camera gets a brief cinematic focus on each
const SIDE=[-1,1,-1,1,-1],PX=MOB?.5:1.75,PY=MOB?-.42:-.55,ZF=MOB?7.2:5.8,PS=MOB?.56:1;
const rr=(g,x,y,w,h,r)=>{g.beginPath();g.roundRect?g.roundRect(x,y,w,h,r):g.rect(x,y,w,h)};
const glowT=ctex((g,w,h)=>{g.shadowColor='#ff7a1a';g.shadowBlur=28;g.strokeStyle='rgba(255,150,70,1)';g.lineWidth=6;rr(g,34,34,w-68,h-68,40);g.stroke();g.shadowBlur=0;g.strokeStyle='rgba(255,236,214,.9)';g.lineWidth=2;rr(g,34,34,w-68,h-68,40);g.stroke()},720,550);
const panels=PRJ.map(([src,label,tag],i)=>{const c=document.createElement('canvas');c.width=640;c.height=470;const g=c.getContext('2d');
 const paint=img=>{g.clearRect(0,0,640,470);rr(g,4,4,632,462,30);g.fillStyle='rgba(255,246,236,.12)';g.fill();g.lineWidth=3;g.strokeStyle='rgba(255,200,160,.7)';g.stroke();
  g.save();rr(g,22,22,596,360,18);g.clip();if(img)g.drawImage(img,22,22,596,360);else{g.fillStyle='#2a1a10';g.fillRect(22,22,596,360)}g.restore();
  g.fillStyle='rgba(255,255,255,.55)';[0,1,2].forEach(k=>{g.beginPath();g.arc(44+k*20,426,6,0,7);g.fill()});g.fillStyle='rgba(255,220,190,.35)';rr(g,420,418,196,16,8);g.fill()};
 paint(null);const t=new THREE.CanvasTexture(c);t.colorSpace=THREE.SRGBColorSpace;t.anisotropy=4;
 const img=new Image();img.onload=()=>{paint(img);t.needsUpdate=true};img.src='images/'+src;
 const m=new THREE.Mesh(new THREE.PlaneGeometry(2.2,2.2*470/640),new THREE.MeshBasicMaterial({map:t,transparent:true,opacity:0,depthWrite:false,color:0xa89f98,side:THREE.DoubleSide}));
 m.position.set(SIDE[i]*PX,PY,0);m.rotation.set(-.2,-SIDE[i]*(MOB?.3:.5),0,'YXZ');m.userData={tk:FT[i],label,tag,w:0};m.scale.setScalar(PS);
 const gl=new THREE.Mesh(new THREE.PlaneGeometry(2.2*720/640*1.0,2.2*550/640),new THREE.MeshBasicMaterial({map:glowT,...ADD,opacity:0}));gl.position.z=-.01;m.add(gl);m.userData.glow=gl;scene.add(m);return m});
// focus label (DOM: crisp text) + soft vignette that de-emphasises everything but the focused panel
const foc=document.createElement('div');foc.className='sfoc';foc.innerHTML='<i></i><b></b>';el.appendChild(foc);const focB=foc.querySelector('b'),focI=foc.querySelector('i');let focK=-1;
const vig=document.createElement('div');vig.className='svig';el.insertBefore(vig,el.querySelector('.sflash'));
// camera path: Catmull-Rom splines (position + look-at) through centre → panel → centre … sampled by time
const CT0=FT[0]-.9,CDT=.45,cpP=[],cpL=[],CEN=new THREE.Vector3(0,0,0),CENL=new THREE.Vector3(0,0,-12);
cpP.push(CEN.clone(),CEN.clone());cpL.push(CENL.clone(),CENL.clone());
FT.forEach((tk,k)=>{cpP.push(new THREE.Vector3(SIDE[k]*PX*(MOB?.3:.55),MOB?.1:.14,0));cpL.push(new THREE.Vector3(SIDE[k]*PX*(MOB?.75:1),PY*.95,-ZF*1.05));if(k<4){cpP.push(CEN.clone());cpL.push(CENL.clone())}});
cpP.push(CEN.clone(),CEN.clone());cpL.push(CENL.clone(),CENL.clone());
const camCurve=new THREE.CatmullRomCurve3(cpP,false,'centripetal'),lookCurve=new THREE.CatmullRomCurve3(cpL,false,'centripetal'),CTN=(cpP.length-1)*CDT;
const _cp=new THREE.Vector3(),_lt=new THREE.Vector3(),_lp=new THREE.Vector3();
// --- service orbs (glowing icons streaking by)
const icon=(k)=>ctex((g,w,h)=>{const r=g.createRadialGradient(64,64,0,64,64,64);r.addColorStop(0,'rgba(255,190,130,.95)');r.addColorStop(.45,'rgba(242,106,27,.75)');r.addColorStop(1,'rgba(242,106,27,0)');g.fillStyle=r;g.fillRect(0,0,128,128);
 g.strokeStyle=g.fillStyle='#fff';g.lineWidth=6;g.lineCap=g.lineJoin='round';g.beginPath();
 if(k===0){g.moveTo(48,48);g.lineTo(32,64);g.lineTo(48,80);g.moveTo(80,48);g.lineTo(96,64);g.lineTo(80,80);g.moveTo(70,42);g.lineTo(58,86);g.stroke()}
 else if(k===1){[[40,72,10,16],[58,58,10,30],[76,48,10,40]].forEach(b=>g.fillRect(...b))}
 else if(k===2){rr(g,36,42,56,38,12);g.stroke();g.beginPath();g.moveTo(50,80);g.lineTo(44,92);g.lineTo(62,80);g.stroke()}
 else{g.arc(64,64,14,0,7);g.stroke();for(let s=0;s<8;s++){const a=s*Math.PI/4;g.beginPath();g.moveTo(64+Math.cos(a)*20,64+Math.sin(a)*20);g.lineTo(64+Math.cos(a)*28,64+Math.sin(a)*28);g.stroke()}}},128,128);
const OT=[3.15,4.05,4.95,5.85],OA=[.6,3.6,1.9,5.0];
const orbs=OT.map((tk,i)=>{const s=new THREE.Sprite(new THREE.SpriteMaterial({map:icon(i),...ADD,opacity:0}));s.scale.setScalar(.62);const a=OA[i],r=MOB?.95:1.35;s.position.set(Math.cos(a)*r,Math.sin(a)*r,0);
 const tp=new Float32Array(6);tp[0]=tp[3]=s.position.x;tp[1]=tp[4]=s.position.y;const g=new THREE.BufferGeometry();g.setAttribute('position',new THREE.BufferAttribute(tp,3));
 const tr=new THREE.Line(g,new THREE.LineBasicMaterial({color:i===2?0xb9b0ff:0xffa060,...ADD,opacity:0}));tr.frustumCulled=false;scene.add(s,tr);return{s,tr,tp,tk}});
// --- light at the end of the tunnel
const endL=new THREE.Sprite(new THREE.SpriteMaterial({map:dotT,color:0xfff1e0,...ADD,opacity:0}));endL.position.z=-60;endL.scale.setScalar(10);scene.add(endL);
// --- hero glass cube that materializes from the burst
const H=1.3,cube=new THREE.Group();cube.visible=false;scene.add(cube);
const edges=new THREE.LineSegments(new THREE.EdgesGeometry(new THREE.BoxGeometry(2*H*.97,2*H*.97,2*H*.97)),new THREE.LineBasicMaterial({color:0xffa060,transparent:true,opacity:0}));cube.add(edges);
const shell=new THREE.Mesh(new RoundedBoxGeometry(2*H,2*H,2*H,5,.22),new THREE.MeshPhysicalMaterial({color:0xffffff,roughness:.05,transparent:true,opacity:0,clearcoat:1,depthWrite:false,side:THREE.DoubleSide}));cube.add(shell);
const emb=ctex((g,w,h)=>{const r=g.createLinearGradient(0,0,w,h);r.addColorStop(0,'#ff9a3c');r.addColorStop(1,'#e84a00');g.fillStyle=r;g.fillRect(0,0,w,h);g.strokeStyle='#fff';g.lineWidth=16;g.lineCap=g.lineJoin='round';g.beginPath();g.moveTo(92,86);g.lineTo(52,128);g.lineTo(92,170);g.moveTo(164,86);g.lineTo(204,128);g.lineTo(164,170);g.moveTo(142,76);g.lineTo(114,180);g.stroke()},256,256);
const core=new THREE.Mesh(new RoundedBoxGeometry(1.4,1.4,1.4,4,.1),new THREE.MeshStandardMaterial({map:emb,color:0xffffff,transparent:true,opacity:0}));cube.add(core);
const burst=new THREE.Sprite(new THREE.SpriteMaterial({map:dotT,color:0xffd2a8,...ADD,opacity:0}));scene.add(burst);
const CZ=-11;
const HT={p:new THREE.Vector3(0,0,CZ),s:.8,rx:-.4,ry:.6,hero:false};
function heroTarget(){const h=window.__heroCubeScreen&&window.__heroCubeScreen();if(!h)return HT;const d=-CZ,vh=2*d*Math.tan(THREE.MathUtils.degToRad(FOV0/2)),vw=vh*cam.aspect;
 HT.p.set((h.x/innerWidth-.5)*vw,(.5-h.y/innerHeight)*vh,CZ);HT.s=Math.max(.05,h.size/((2*H)/vh*innerHeight));HT.rx=h.rx;HT.ry=h.ry;HT.hero=true;return HT}
// --- timeline
let exitT=null,ht=null,raf,scr=false;const sbg=el.querySelector('.sbg');let wmP=0;const _pv=new THREE.Vector3(),_fp=new THREE.Vector3(),CS=window.__splashCubeScr={x:0,y:0};window.__splashHideCube=true;window.__splashF=0;
const wrapZ=(z0,d)=>{let z=((z0-d)%L+L)%L;return -z+2};
function frame(now){if(!el.isConnected)return;raf=requestAnimationFrame(frame);const _js0=performance.now();const MAN=window.__splashT!=null;const t=MAN?window.__splashT:(now-T0)/1000;
 if(t>=.35)el.classList.add('t0');if(t>=2.2)el.classList.add('t1');if(t>=2.45&&!scr){scr=true;scramble()}if(t>=3.2)el.classList.add('t3');if(t>=3.7)el.classList.add('t4');
 // progress
 const tp=Math.min(1,(now-T0)/MIN),rp=realP();const goal=Math.min(rp,tp)*100;shown+=(goal-shown)*.12;if(goal>=100&&shown>99.4)shown=100;if(MAN)shown=Math.min(100,t/(MIN/1000)*100);
 pctEl.textContent=Math.round(shown);bar.style.width=shown+'%';
 if(!done&&!MAN&&((rp>=1&&now-T0>=MIN&&shown>=100)||now-T0>=MAX))exit();
 const e=exitT===null?0:Math.min(t-exitT,1.4),ex=sm(0,.6,e);
 const d=D(t)+(exitT===null?0:22*e*e),spd=Math.min(1,SPD(t)+ex);
 // camera: FOV kick with speed, gentle roll
 const u=Math.min(Math.max((t-CT0)/CTN,0),1),cf=1-sm(0,.35,e);camCurve.getPoint(u,_cp);lookCurve.getPoint(u,_lt);cam.position.copy(_cp).multiplyScalar(cf);_lt.lerp(CENL,1-cf);cam.lookAt(_lt);
 cam.fov=FOV0+16*spd*(1-sm(.45,.7,e))+10*sm(TS,TS+.5,t)*(1-sm(TS+.5,TS+1.4,t));cam.rotateZ((Math.sin(t*.7)*.05*spd-_cp.x*.09)*cf);
 // lift the vanishing point to ~40% so portal/tunnel clear the text block; eased back to centre before the cube appears
 cam.setViewOffset(innerWidth,innerHeight,0,innerHeight*.1*(1-sm(.1,.48,e)),innerWidth,innerHeight);
 // portal
 const ig=sm(.1,1.0,t);ringLine.geometry.setDrawRange(0,Math.floor(sm(.1,.8,t)*201));const nearF=1-sm(-2.2,-.6,portal.position.z);ringGlow.material.opacity=sm(.5,1.1,t)*(.7+.12*Math.sin(t*9))*nearF;ringGlow.scale.setScalar(RR*2.65+Math.sin(t*5)*.05);
 swirlU.uT.value=t;swirlU.uO.value=sm(.6,1.3,t)*(1-sm(-4,-2,RING_Z+d));portal.position.z=RING_Z+d;portal.rotation.z=t*.3;portal.visible=portal.position.z<1.5;
 for(let i=0;i<NS;i++){const i3=i*3,lf=(sSeed[i3+1]+t*sSeed[i3+2]*.6)%1,a=sSeed[i3]+t*.8*(.5+sSeed[i3+2]*.4)+lf*.9,r=RR+lf*lf*(.9+sSeed[i3+2]*.4);sPos[i3]=Math.cos(a)*r;sPos[i3+1]=Math.sin(a)*r;sPos[i3+2]=lf*.6*(sSeed[i3+1]-.5)}
 sg.attributes.position.needsUpdate=true;sparkM.opacity=sm(.4,1,t)*.9*nearF;
 // tunnel
 tunU.uT.value=t;tunU.uD.value=d;tunU.uS.value=spd;tunU.uCut.value=Math.min(RING_Z+d,3);tunU.uO.value=sm(.6,1.6,t)*(1-sm(.15,.6,e));
 const fo=(1-sm(.15,.6,e))*sm(3.5,6.5,d);
 segs.forEach(m=>{const z=wrapZ(m.userData.z0,d);m.position.z=z;m.rotation.z+=m.userData.w*.01;m.material.opacity=sm(-70,-30,z)*sm(2,-2,z)*.3*fo});
 const sl=.12+spd*spd*2.4;for(let i=0;i<NK;i++){const i6=i*6,z=wrapZ(kd[i*3+2],d);kp[i6+2]=z;kp[i6+5]=z-sl}kg.attributes.position.needsUpdate=true;streakM.opacity=fo*.6*(1-.3*wmP);
 glyphs.forEach(s=>{const z=wrapZ(s.userData.z0,d);s.position.z=z;s.material.opacity=sm(-45,-20,z)*sm(1,-3,z)*.4*fo});
 const pz=tk=>d-D(tk);// z of an object that reaches the camera at time tk
 let wm=0,km=-1;panels.forEach((m,k)=>{const tk=m.userData.tk,z=d-D(tk)-ZF;m.position.z=z;m.visible=z>-60&&z<2.5;const w=sm(tk-.42,tk-.08,t)*(1-sm(tk+.28,tk+.55,t))*fo;
  m.material.opacity=sm(-55,-26,z)*sm(-.5,-2.0,z)*fo;m.scale.setScalar(PS*(1+.12*w));const br=.55+.15*w;m.material.color.setRGB(br,br*.96,br*.93);m.userData.glow.material.opacity=w*.95*m.material.opacity;if(w>wm){wm=w;km=k}});
 vig.style.opacity=(wm*.85).toFixed(3);wmP=wm;cam.updateMatrixWorld();
 if(km>=0&&wm>.01){const m=panels[km];if(km!==focK){focK=km;focB.textContent=m.userData.label;focI.textContent=m.userData.tag}m.localToWorld(_fp.set(0,1.02,0));_fp.project(cam);
  foc.style.transform='translate('+((_fp.x+1)/2*innerWidth).toFixed(1)+'px,'+((1-_fp.y)/2*innerHeight).toFixed(1)+'px) translate(-50%,-100%) translateY('+((1-wm)*8).toFixed(1)+'px)';foc.style.opacity=sm(.25,.8,wm).toFixed(3)}else foc.style.opacity=0;
 orbs.forEach(o=>{const z=pz(o.tk);o.s.position.z=z;o.tp[2]=z;o.tp[5]=z-sl*1.6;o.tr.geometry.attributes.position.needsUpdate=true;const op=sm(-50,-22,z)*sm(1,-1,z)*fo*(1-.75*wmP);o.s.material.opacity=op;o.tr.material.opacity=op*.7});
 endL.material.opacity=sm(1.4,3,t)*(.35+.25*spd)*(1-sm(.55,.9,e));endL.scale.setScalar(10+spd*6+sm(0,.55,e)*150);endL.position.z=-60+sm(0,.55,e)*40;
 bloom.strength=(.75+spd*.15)*(1-sm(.35,.75,e));
 // exit: warm-white burst → cream; the glass cube materializes at the hero cube's position
 if(exitT!==null){// warm ramp: dark → orange → peach → cream, under an additive white flash (never mixes dark with cream)
  if(e<.28)scene.background.lerpColors(BGD,BGO,Math.sqrt(sm(0,.24,e)));else if(e<.5)scene.background.lerpColors(BGO,BGP,sm(.28,.5,e));else scene.background.lerpColors(BGP,BGC,sm(.5,.85,e));
  if(e>=.22&&!el.classList.contains('fl1'))el.classList.add('fl1','flash');if(e>=.45&&!el.classList.contains('fl0')){el.classList.add('fl0');finish()}if(e>=.68)el.classList.remove('flash');
  if(e>=.45)heroTarget();const k=sm(.5,1.0,e),pop=1+Math.sin(Math.min(k,1)*Math.PI)*.08;cube.visible=e>=.5;cube.position.copy(ht.p);cube.scale.setScalar(ht.s*(.55+.45*k)*pop);
  if(ht.hero){cube.rotation.set(ht.rx+(1-k)*.5,ht.ry-(1-k)*1.2,0)}else{cube.rotation.set(-.4,.6-(1-k)*1.2+t*.2,0)}
  shell.material.opacity=k*.22;core.material.opacity=k;edges.material.opacity=sm(.5,.7,e)*(1-sm(.85,1.1,e))*.9;
  burst.position.copy(ht.p);burst.scale.setScalar(ht.s*(3+sm(.45,.8,e)*6));burst.material.opacity=sm(.45,.6,e)*(1-sm(.7,1.05,e))*.9;
  _pv.copy(cube.position).project(cam);CS.x=(_pv.x+1)/2*innerWidth;CS.y=(1-_pv.y)/2*innerHeight;
  if(e>=1&&!el.classList.contains('gone')){el.classList.add('gone');window.__splashHideCube=false}
  if(e>=1.4){cleanup();return}}
 (window.__splashJs||(window.__splashJs=[])).push(performance.now()-_js0);comp.render();window.__splashF++}
raf=requestAnimationFrame(frame);
// stall fallback: if the device can't finish the timeline, end cleanly by wall-clock
const safety=setTimeout(()=>{if(window.__splashT==null)exit(true)},MAX+2500);
var exit=function(skip){if(done)return;done=true;chime();
 if(skip){window.__splashHideCube=false;el.classList.add('exit');finish();el.style.transition='opacity .45s ease';setTimeout(()=>{el.style.opacity=0;setTimeout(cleanup,480)},120);return}
 sbg.style.display='none';ht=heroTarget();window.__handoff=ht;exitT=window.__splashT!=null?window.__splashT:(performance.now()-T0)/1000;el.classList.add('exit')};
window.__splashExit=()=>exit();
function cleanup(){clearTimeout(safety);if(!el.isConnected)return;root.classList.remove('splash-on');window.__splashHideCube=false;cancelAnimationFrame(raf);removeEventListener('resize',size);
 scene.traverse(o=>{o.geometry&&o.geometry.dispose();if(o.material){[].concat(o.material).forEach(m=>{m.map&&m.map.dispose();m.dispose()})}});
 comp.dispose&&comp.dispose();R.dispose();R.forceContextLoss();el.remove();window.__splashDisposed=true}
}

/* ============================================================================
   1. SHARED 3D HELPERS & PROCEDURAL TEXTURES
   ============================================================================ */

/**
 * Creates a reusable clear glass reactor cube with internal circuit core and ambient glow.
 */
function makeClearCube() {
  const G = new THREE.Group();

  const T = (draw, w = 256, h = 256) => {
    const c = document.createElement('canvas');
    c.width = w;
    c.height = h;
    draw(c.getContext('2d'), w, h);
    const t = new THREE.CanvasTexture(c);
    t.colorSpace = THREE.SRGBColorSpace;
    t.anisotropy = 8;
    return t;
  };

  // Outer translucent physical glass shell
  const shell = new THREE.Mesh(
    new RoundedBoxGeometry(2.6, 2.6, 2.6, 6, 0.22),
    new THREE.MeshPhysicalMaterial({
      color: 0xffffff,
      roughness: 0.02,
      metalness: 0,
      opacity: 0.16,
      clearcoat: 1,
      clearcoatRoughness: 0,
      specularIntensity: 0.8,
      envMapIntensity: 0.6,
      transparent: true,
      depthWrite: false,
      side: THREE.DoubleSide
    })
  );
  shell.castShadow = true;
  G.add(shell);

  // Interior light reflection layer
  const back = new THREE.Mesh(
    new RoundedBoxGeometry(2.58, 2.58, 2.58, 6, 0.22),
    new THREE.MeshPhysicalMaterial({
      color: 0xffe8d6,
      roughness: 0.05,
      envMapIntensity: 0.3,
      transparent: true,
      opacity: 0.12,
      side: THREE.BackSide,
      depthWrite: false,
      clearcoat: 1
    })
  );
  G.add(back);

  // Subtle wireframe perimeter
  const edges = new THREE.LineSegments(
    new THREE.EdgesGeometry(new THREE.BoxGeometry(2.5, 2.5, 2.5)),
    new THREE.LineBasicMaterial({
      color: 0xf26a1b,
      transparent: true,
      opacity: 0.85
    })
  );
  G.add(edges);

  // Procedural canvas circuit pattern (pure vibrant theme orange #f26a1b)
  const circ = T((g, w, h) => {
    const r = g.createLinearGradient(0, 0, w, h);
    r.addColorStop(0, '#f26a1b');
    r.addColorStop(1, '#c24b07');
    g.fillStyle = r;
    g.fillRect(0, 0, w, h);

    g.strokeStyle = 'rgba(255, 230, 190, 0.6)';
    g.lineWidth = 3;
    for (let i = 0; i < 14; i++) {
      g.beginPath();
      const x = (i * 37) % w, y = (i * 59) % h;
      g.moveTo(x, 0);
      g.lineTo(x, y);
      g.lineTo(x + 40, y + 30);
      g.lineTo(x + 40, h);
      g.stroke();

      g.fillStyle = '#ffd5a8';
      g.beginPath();
      g.arc(x + 40, y + 30, 4, 0, Math.PI * 2);
      g.fill();
    }

    // Centered code brackets icon </ >
    g.strokeStyle = '#ffffff';
    g.lineWidth = 16;
    g.lineCap = g.lineJoin = 'round';
    g.shadowColor = 'rgba(242, 106, 27, 0.9)';
    g.shadowBlur = 14;
    g.beginPath();
    g.moveTo(92, 86);
    g.lineTo(52, 128);
    g.lineTo(92, 170);
    g.moveTo(164, 86);
    g.lineTo(204, 128);
    g.lineTo(164, 170);
    g.moveTo(142, 76);
    g.lineTo(114, 180);
    g.stroke();
  });

  // Glowing core with pure theme orange #f26a1b
  const core = new THREE.Mesh(
    new RoundedBoxGeometry(1.45, 1.45, 1.45, 4, 0.1),
    new THREE.MeshStandardMaterial({
      map: circ,
      emissiveMap: circ,
      color: 0xf26a1b,
      emissive: 0xf26a1b,
      emissiveIntensity: 0.28,
      roughness: 0.3
    })
  );
  G.add(core);

  // Radial glow halo sprite (pure theme orange)
  const halo = new THREE.Sprite(
    new THREE.SpriteMaterial({
      map: T((g, w, h) => {
        const r = g.createRadialGradient(w / 2, h / 2, 0, w / 2, h / 2, w / 2);
        r.addColorStop(0, 'rgba(242, 106, 27, 0.65)');
        r.addColorStop(0.4, 'rgba(242, 106, 27, 0.15)');
        r.addColorStop(1, 'rgba(242, 106, 27, 0)');
        g.fillStyle = r;
        g.fillRect(0, 0, w, h);
      }),
      transparent: true,
      depthWrite: false,
      blending: THREE.AdditiveBlending
    })
  );
  halo.scale.setScalar(4.5);
  halo.renderOrder = -1;
  G.add(halo);

  G.userData = { core, halo, edges };
  return G;
}

/**
 * Updates clear cube pulsing and rotation.
 */
function cubeTick(G, t) {
  const p = 0.5 + 0.5 * Math.sin(t * 2.2);
  G.userData.core.material.emissiveIntensity = 0.18 + p * 0.14;
  G.userData.halo.material.opacity = 0.08 + p * 0.08;
  G.userData.halo.scale.setScalar(3.6 + p * 0.5);
  G.rotation.y = t * 0.25;
  G.rotation.x = -0.4 + Math.sin(t * 0.5) * 0.06;
  G.userData.core.rotation.y = -t * 0.15;
}

/* ============================================================================
   2. HERO 3D SCENE & INTERACTIVE ORBIT
   ============================================================================ */
function initHeroScene() {
  const stage = document.getElementById('stage');
  const canvas = document.getElementById('c');
  if (!stage || !canvas) return;

  const R = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
  R.setPixelRatio(Math.min(devicePixelRatio, 2));
  R.toneMapping = THREE.NoToneMapping;
  R.shadowMap.enabled = true;
  R.shadowMap.type = THREE.PCFSoftShadowMap;

  const scene = new THREE.Scene();
  const BG = { l: new THREE.Color(0xeae5dc), d: new THREE.Color(0x0f0f15) };
  scene.background = document.body.classList.contains('dark') ? BG.d.clone() : BG.l.clone();

  scene.environment = new THREE.PMREMGenerator(R).fromScene(new RoomEnvironment(), 0.04).texture;

  const cam = new THREE.PerspectiveCamera(36, 1, 0.1, 100);
  cam.position.set(0, 0.6, 13);

  const lr = new CSS2DRenderer();
  lr.domElement.style.cssText = 'position:absolute;inset:0;pointer-events:none;z-index:3';
  stage.appendChild(lr.domElement);

  scene.add(new THREE.AmbientLight(0xfff1e6, 0.6));

  const key = new THREE.DirectionalLight(0xffffff, 1.6);
  key.position.set(4, 7, 6);
  key.castShadow = true;
  key.shadow.mapSize.set(1024, 1024);
  key.shadow.radius = 8;
  Object.assign(key.shadow.camera, { left: -8, right: 8, top: 8, bottom: -8 });
  scene.add(key);

  const warm = new THREE.PointLight(0xff7a2a, 30, 12);
  scene.add(warm);

  const root = new THREE.Group();
  scene.add(root);
  root.position.x = -0.2;
  const world = new THREE.Group();
  root.add(world);

  // Soft shadow catcher
  const sh = new THREE.Mesh(new THREE.PlaneGeometry(30, 30), new THREE.ShadowMaterial({ opacity: 0.08 }));
  sh.rotation.x = -Math.PI / 2;
  sh.position.y = -3.4;
  sh.receiveShadow = true;
  scene.add(sh);

  function tex(draw, w = 256, h = 256) {
    const c = document.createElement('canvas');
    c.width = w;
    c.height = h;
    draw(c.getContext('2d'), w, h);
    const t = new THREE.CanvasTexture(c);
    t.colorSpace = THREE.SRGBColorSpace;
    t.anisotropy = 8;
    return t;
  }

  const glass = (o = {}) =>
    new THREE.MeshPhysicalMaterial(
      Object.assign(
        {
          color: 0xffffff,
          metalness: 0,
          roughness: 0.12,
          transmission: 0.96,
          thickness: 1.2,
          ior: 1.4,
          clearcoat: 1,
          clearcoatRoughness: 0.05,
          transparent: true,
          envMapIntensity: 0.9,
          iridescence: 0.4,
          specularIntensity: 1
        },
        o
      )
    );

  const orangeM = new THREE.MeshStandardMaterial({
    color: 0xff6a1a,
    emissive: 0xff5a0a,
    emissiveIntensity: 0.25,
    roughness: 0.3,
    metalness: 0.2
  });

  const cube = makeClearCube();
  world.add(cube);

  // Expose hero cube projection for splash handoff alignment
  window.__heroReady = true;
  window.__heroCubeScreen = () => {
    if (!canvas || !cube) return null;
    const rect = canvas.getBoundingClientRect();
    const wp = new THREE.Vector3();
    cube.getWorldPosition(wp);
    wp.project(cam);
    const x = ((wp.x + 1) / 2) * rect.width + rect.left;
    const y = ((-wp.y + 1) / 2) * rect.height + rect.top;
    const dist = cam.position.distanceTo(wp);
    const vh = 2 * dist * Math.tan(THREE.MathUtils.degToRad(cam.fov / 2));
    const size = (2.6 / vh) * rect.height;
    return {
      x,
      y,
      size,
      rx: cube.rotation.x,
      ry: cube.rotation.y
    };
  };

  // Orbital Rings (well-proportioned, elevated height in theme orange palette)
  const rings = [];
  [
    [4.1, 4.4, 0.22, 0xf26a1b, 0.7],
    [4.5, 4.8, -0.20, 0xff8a3d, 0.5],
    [3.7, 4.0, 0.42, 0xffaa5e, 0.4]
  ].forEach(([a, b, tilt, c, op]) => {
    const pts = new THREE.EllipseCurve(0, 0, a, b).getPoints(200).map(p => new THREE.Vector3(p.x, 0, p.y));
    const geo = new THREE.BufferGeometry().setFromPoints(pts);
    const l = new THREE.LineLoop(geo, new THREE.LineBasicMaterial({ color: c, transparent: true, opacity: op }));
    l.rotation.set(0.92, 0, tilt);
    world.add(l);
    rings.push(l);
  });

  // Orbital Satellites
  const sats = [];
  const labelsDiv = [];
  function label(text) {
    const d = document.createElement('div');
    d.className = 'lbl';
    d.textContent = text;
    labelsDiv.push(d);
    return d;
  }

  function sphereSat(tint, att) {
    const g = new THREE.Group();
    const s = new THREE.Mesh(
      new THREE.SphereGeometry(0.95, 64, 64),
      new THREE.MeshPhysicalMaterial({
        color: tint,
        transparent: true,
        opacity: 0.07,
        roughness: 0.06,
        transmission: 0.85,
        thickness: 0.2,
        ior: 1.2,
        clearcoat: 1,
        clearcoatRoughness: 0.05,
        iridescence: 0.35,
        envMapIntensity: 0.6,
        depthWrite: false,
        side: THREE.FrontSide
      })
    );
    const rim = new THREE.Mesh(
      new THREE.SphereGeometry(0.97, 48, 48),
      new THREE.ShaderMaterial({
        transparent: true,
        depthWrite: false,
        uniforms: { c: { value: new THREE.Color(att) } },
        vertexShader:
          'varying vec3 n;varying vec3 v;void main(){n=normalize(normalMatrix*normal);vec4 p=modelViewMatrix*vec4(position,1.);v=normalize(-p.xyz);gl_Position=projectionMatrix*p;}',
        fragmentShader:
          'uniform vec3 c;varying vec3 n;varying vec3 v;void main(){float f=pow(1.-abs(dot(n,v)),3.2);gl_FragColor=vec4(c,f*.85);}'
      })
    );
    g.add(rim);
    s.castShadow = true;
    g.add(s);
    g.userData.hit = s;
    return g;
  }

  // 1: Custom Web Apps (Code Editor Screen inside Glass Bubble)
  {
    const g = sphereSat(0xffffff, 0xffa060);
    const win = new THREE.Group();
    const body = new THREE.Mesh(
      new RoundedBoxGeometry(1.22, 0.88, 0.12, 4, 0.05),
      new THREE.MeshPhysicalMaterial({ color: 0x202436, roughness: 0.25, clearcoat: 1, metalness: 0.3 })
    );
    body.castShadow = true;
    win.add(body);

    const t = tex((g2, w, h) => {
      g2.fillStyle = '#171a2b';
      g2.fillRect(0, 0, w, h);
      g2.fillStyle = '#252a44';
      g2.fillRect(0, 0, w, 34);
      ['#ff5f57', '#febc2e', '#28c840'].forEach((c, i) => {
        g2.fillStyle = c;
        g2.beginPath();
        g2.arc(22 + i * 20, 17, 6, 0, 7);
        g2.fill();
      });
      const cs = ['#ff8a3d', '#7aa2ff', '#c792ea', '#9ece6a', '#ffcb6b', '#89ddff'];
      for (let i = 0; i < 9; i++) {
        g2.fillStyle = '#4a5070';
        g2.fillRect(14, 52 + i * 20, 14, 6);
        let x = 40 + (i % 3) * 14;
        for (let k = 0; k < 3; k++) {
          const wd = 20 + ((i * 7 + k * 13) % 50);
          g2.fillStyle = cs[(i + k) % 6];
          g2.fillRect(x, 52 + i * 20, wd, 7);
          x += wd + 8;
        }
      }
    }, 360, 256);

    const scr = new THREE.Mesh(new THREE.PlaneGeometry(1.12, 0.78), new THREE.MeshBasicMaterial({ map: t, toneMapped: false }));
    scr.position.z = 0.07;
    win.add(scr);
    win.rotation.set(-0.1, 0.35, 0.05);
    g.add(win);
    g.userData.hit = body;
    g.userData.win = win;
    g.userData.lbl = [-0.65, 1.35];
    sats.push({ g, name: 'Custom Web Apps', r: 0, phase: 2.35, a: 3.6, b: 3.2 });
  }

  // 2: CRM Systems (Constellation Nodes)
  {
    const g = sphereSat(0xffffff, 0xffb27a);
    const nodes = [];
    for (let i = 0; i < 6; i++) {
      const a = (i / 6) * Math.PI * 2;
      const v = new THREE.Vector3(Math.cos(a) * 0.55, Math.sin(a) * 0.55, i % 2 ? 0.15 : -0.15);
      const n = new THREE.Mesh(new THREE.SphereGeometry(0.13, 24, 24), orangeM);
      n.position.copy(v);
      g.add(n);
      nodes.push(v);
    }
    const lp = [];
    nodes.forEach(v => {
      lp.push(new THREE.Vector3(), v);
    });
    g.add(new THREE.LineSegments(new THREE.BufferGeometry().setFromPoints(lp), new THREE.LineBasicMaterial({ color: 0xff7a2a })));

    const u = new THREE.Mesh(
      new THREE.CircleGeometry(0.24, 32),
      new THREE.MeshBasicMaterial({
        map: tex((c, w, h) => {
          c.fillStyle = '#3a3f55';
          c.beginPath();
          c.arc(128, 128, 128, 0, 7);
          c.fill();
          c.fillStyle = '#fff';
          c.beginPath();
          c.arc(128, 100, 38, 0, 7);
          c.fill();
          c.beginPath();
          c.ellipse(128, 200, 64, 46, 0, Math.PI, 0);
          c.fill();
        })
      })
    );
    u.position.z = 0.3;
    g.add(u);
    g.userData.spin = u;
    g.userData.lbl = [1.25, 0.95];
    sats.push({ g, name: 'CRM Systems', r: 1, phase: 0.6, a: 3.6, b: 3.2 });
  }

  // 3: Team Chat (Message Bubble)
  {
    const g = sphereSat(0xffffff, 0xffa060);
    const b = new THREE.Mesh(
      new RoundedBoxGeometry(0.95, 0.7, 0.3, 4, 0.15),
      new THREE.MeshPhysicalMaterial({ color: 0x6a5cff, emissive: 0x4a3cff, emissiveIntensity: 0.5, roughness: 0.2, clearcoat: 1 })
    );
    g.add(b);
    for (let i = -1; i <= 1; i++) {
      const d = new THREE.Mesh(new THREE.SphereGeometry(0.07, 16, 16), new THREE.MeshBasicMaterial({ color: 0xffffff }));
      d.position.set(i * 0.22, 0, 0.17);
      g.add(d);
    }
    const tail = new THREE.Mesh(new THREE.ConeGeometry(0.12, 0.25, 12), b.material);
    tail.position.set(-0.3, -0.4, 0);
    tail.rotation.z = 0.6;
    g.add(tail);
    g.userData.lbl = [-0.45, -1.25];
    sats.push({ g, name: 'Team Chat', r: 0, phase: 3.9, a: 3.6, b: 3.2 });
  }

  // 4: Workflow Automation (Gear & Orbit Arrows)
  {
    const g = sphereSat(0xffffff, 0xffa060);
    const gs = new THREE.Shape();
    const N = 8;
    for (let i = 0; i < N * 2; i++) {
      const a = (i / (N * 2)) * Math.PI * 2, r = i % 2 ? 0.32 : 0.42;
      const a2 = a + Math.PI / (N * 2);
      i ? gs.lineTo(Math.cos(a) * r, Math.sin(a) * r) : gs.moveTo(Math.cos(a) * r, Math.sin(a) * r);
      gs.lineTo(Math.cos(a2) * r, Math.sin(a2) * r);
    }
    const hole = new THREE.Path();
    hole.absarc(0, 0, 0.13, 0, Math.PI * 2, true);
    gs.holes.push(hole);

    const gear = new THREE.Mesh(
      new THREE.ExtrudeGeometry(gs, { depth: 0.18, bevelEnabled: true, bevelSize: 0.02, bevelThickness: 0.02 }),
      new THREE.MeshStandardMaterial({ color: 0x6e768e, metalness: 0.75, roughness: 0.25 })
    );
    gear.position.z = -0.09;
    g.add(gear);

    const arr = new THREE.Group();
    for (let k = 0; k < 2; k++) {
      const t = new THREE.Mesh(new THREE.TorusGeometry(0.66, 0.06, 12, 48, Math.PI * 0.75), orangeM);
      t.rotation.z = k * Math.PI;
      arr.add(t);
      const h = new THREE.Mesh(new THREE.ConeGeometry(0.13, 0.25, 12), orangeM);
      const a = k * Math.PI + Math.PI * 0.75;
      h.position.set(Math.cos(a) * 0.66, Math.sin(a) * 0.66, 0);
      h.rotation.z = a;
      arr.add(h);
    }
    g.add(arr);
    g.userData.spin = gear;
    g.userData.arr = arr;
    g.userData.lbl = [1.3, -1.15];
    sats.push({ g, name: 'Workflow Automation', r: 1, phase: 5.55, a: 3.6, b: 3.2 });
  }

  // Connect labels with SVG paths
  const lineSvg = document.getElementById('lines');
  sats.forEach(s => {
    world.add(s.g);
    s.g.scale.setScalar(0.001);
    const anchor = new THREE.Object3D();
    anchor.position.set(s.g.userData.lbl[0], s.g.userData.lbl[1], 0);
    s.g.add(anchor);
    const o = new CSS2DObject(label(s.name));
    anchor.add(o);
    s.anchor = anchor;
    s.lblObj = o;

    if (lineSvg) {
      s.path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      s.path.setAttribute('fill', 'none');
      s.path.setAttribute('stroke', '#f26a1b');
      s.path.setAttribute('stroke-width', '1.2');
      s.path.setAttribute('stroke-opacity', '0.6');
      lineSvg.appendChild(s.path);
    }
    s.hl = 0;
    s.target = 1;
  });

  // Ambient particles
  const pts = new THREE.BufferGeometry();
  const P = [];
  for (let i = 0; i < 160; i++) P.push((Math.random() - 0.5) * 14, (Math.random() - 0.5) * 8, (Math.random() - 0.5) * 6);
  pts.setAttribute('position', new THREE.Float32BufferAttribute(P, 3));

  const dotT = tex((g, w, h) => {
    const r = g.createRadialGradient(w / 2, h / 2, 0, w / 2, h / 2, w / 2);
    r.addColorStop(0, '#fff');
    r.addColorStop(0.3, 'rgba(255,170,90,0.85)');
    r.addColorStop(1, 'rgba(255,140,60,0)');
    g.fillStyle = r;
    g.fillRect(0, 0, w, h);
  }, 64, 64);

  const particles = new THREE.Points(
    pts,
    new THREE.PointsMaterial({ size: 0.12, map: dotT, transparent: true, depthWrite: false, blending: THREE.AdditiveBlending })
  );
  world.add(particles);

  const balls = [];
  for (let i = 0; i < 12; i++) {
    const m = new THREE.Mesh(new THREE.SphereGeometry(0.06 + Math.random() * 0.1, 24, 24), i % 3 ? orangeM : glass({ thickness: 0.4 }));
    m.position.set((Math.random() - 0.5) * 10, (Math.random() - 0.5) * 6, (Math.random() - 0.5) * 3);
    m.userData.p = Math.random() * 6;
    world.add(m);
    balls.push(m);
  }

  // Post-processing bloom
  const comp = new EffectComposer(R);
  comp.addPass(new RenderPass(scene, cam));
  const bloom = new UnrealBloomPass(new THREE.Vector2(1, 1), 0.55, 0.5, 1.02);
  comp.addPass(bloom);
  comp.addPass(new OutputPass());

  function size() {
    const w = stage.clientWidth, h = stage.clientHeight;
    R.setSize(w, h, false);
    comp.setSize(w, h);
    lr.setSize(w, h);
    cam.aspect = w / h;
    cam.position.z = w < 600 ? 17 : 15.5;
    cam.updateProjectionMatrix();
    if (lineSvg) lineSvg.setAttribute('viewBox', `0 0 ${w} ${h}`);
  }
  window.addEventListener('resize', size);
  size();

  // Mouse drag & raycaster interaction
  let mx = 0, my = 0, dragY = 0, dragX = 0, vy = 0, vx = 0, down = false, lx = 0, ly = 0;
  const ray = new THREE.Raycaster(), m2 = new THREE.Vector2();
  let hover = -1, focus = 0;

  window.addEventListener('pointermove', e => {
    mx = e.clientX / window.innerWidth - 0.5;
    my = e.clientY / window.innerHeight - 0.5;
    if (down) {
      vy = (e.clientX - lx) * 0.005;
      vx = (e.clientY - ly) * 0.003;
      lx = e.clientX;
      ly = e.clientY;
    }
    const r = canvas.getBoundingClientRect();
    m2.set(((e.clientX - r.left) / r.width) * 2 - 1, -((e.clientY - r.top) / r.height) * 2 + 1);
    ray.setFromCamera(m2, cam);
    hover = -1;
    sats.forEach((s, i) => {
      if (ray.intersectObject(s.g, true).length) hover = i;
    });
    canvas.style.cursor = hover >= 0 ? 'pointer' : '';
  });

  canvas.addEventListener('pointerdown', e => {
    down = true;
    lx = e.clientX;
    ly = e.clientY;
    if (hover >= 0) setFocus(hover);
  });
  window.addEventListener('pointerup', () => (down = false));

  const chips = [...document.querySelectorAll('.chip')];
  let targetSpin = null;

  function setFocus(i) {
    focus = i;
    chips.forEach((c, k) => c.classList.toggle('on', k === i));
    const s = sats[i];
    const ang = Math.atan2(s.g.position.x, s.g.position.z);
    targetSpin = dragY - ang;
  }

  chips.forEach(c => (c.onclick = () => setFocus(+c.dataset.i)));

  // Dark mode switch handler (Default is Dark Theme)
  const dmBtn = document.getElementById('dm');
  if (dmBtn) {
    dmBtn.onclick = () => {
      const isDark = document.body.classList.toggle('dark');
      try { localStorage.setItem('theme', isDark ? 'dark' : 'light'); } catch (e) {}
      scene.background = isDark ? BG.d.clone() : BG.l.clone();
    };
  }
  new MutationObserver(() => {
    const isDark = document.body.classList.contains('dark');
    scene.background = isDark ? BG.d.clone() : BG.l.clone();
  }).observe(document.body, { attributes: true, attributeFilter: ['class'] });

  // Sound generator via Web Audio API
  let actx;
  const sndBtn = document.getElementById('snd');
  if (sndBtn) {
    sndBtn.onclick = () => {
      actx = actx || new AudioContext();
      const o = actx.createOscillator(), g = actx.createGain();
      o.frequency.value = 660;
      g.gain.setValueAtTime(0.08, actx.currentTime);
      g.gain.exponentialRampToValueAtTime(0.0001, actx.currentTime + 0.4);
      o.connect(g).connect(actx.destination);
      o.start();
      o.stop(actx.currentTime + 0.4);
    };
  }

  const clock = new THREE.Clock();
  const ease = t => 1 - Math.pow(1 - Math.min(Math.max(t, 0), 1), 3);
  const v3 = new THREE.Vector3();
  let heroVis = true;
  new IntersectionObserver(e => (heroVis = e[0].isIntersecting)).observe(stage);

  function loop() {
    requestAnimationFrame(loop);
    if (!heroVis) return;
    const t = clock.getElapsedTime();

    // Staggered entrance animation
    const e = ease((t - 0.2) / 1.6);
    if (window.__splashHideCube) {
      cube.visible = false;
    } else {
      cube.visible = true;
      cube.scale.setScalar(0.3 + 0.7 * e);
      cube.position.y = (1 - e) * -2;
    }
    rings.forEach((r, i) => {
      r.material.opacity = [0.75, 0.55, 0.4][i] * ease((t - 0.6 - i * 0.15) / 1);
    });

    cubeTick(cube, t);
    cube.position.y += Math.sin(t * 1.1) * 0.12;
    warm.intensity = 10 + Math.sin(t * 2.2) * 6;

    if (!down) {
      vy *= 0.94;
      vx *= 0.9;
    }
    dragY += vy;
    dragX = THREE.MathUtils.clamp(dragX + vx, -0.5, 0.5);
    dragX *= 0.97;

    if (targetSpin !== null) {
      dragY += (targetSpin - dragY) * 0.06;
      if (Math.abs(targetSpin - dragY) < 0.01) targetSpin = null;
    }

    root.rotation.y += (mx * 0.35 - root.rotation.y) * 0.05;
    root.rotation.x += (my * 0.2 + dragX - root.rotation.x) * 0.05;

    const orbit = (t - 6) * 0.08 + dragY;

    sats.forEach((s, i) => {
      const a = s.phase + orbit;
      s.g.position.set(
        Math.cos(a) * s.a,
        Math.sin(a) * s.b + Math.sin(t * 1.3 + i) * 0.12,
        Math.sin(a) * 1.8
      );
      const se = ease((t - 0.8 - i * 0.18) / 1.1);
      const baseScale = 0.65;
      const want = (i === hover ? 1.15 : 1) * (i === focus ? 1.12 : 1) * baseScale;
      s.sc = (s.sc || baseScale) + (want - (s.sc || baseScale)) * 0.12;
      s.g.scale.setScalar(Math.max(se * s.sc * (window.innerWidth < 600 ? 0.82 : 1), 0.001));

      s.g.rotation.y = Math.sin(t * 0.6 + i) * 0.3;
      s.g.rotation.x = Math.sin(t * 0.5 + i) * 0.1;
      if (s.g.userData.win) s.g.userData.win.rotation.y = 0.25 + Math.sin(t * 0.6) * 0.12;
      if (s.g.userData.spin && i === 3) s.g.userData.spin.rotation.z = t * 0.8;
      if (s.g.userData.arr) s.g.userData.arr.rotation.z = -t * 0.6;

      const hi = i === hover || i === focus;
      s.lblObj.element.classList.toggle('hi', hi);
      s.lblObj.element.style.opacity = se;
    });

    particles.rotation.y = t * 0.02;
    balls.forEach(b => {
      b.position.y += Math.sin(t + b.userData.p) * 0.003;
    });

    comp.render();
    lr.render(scene, cam);

    // Update connector lines
    const w = stage.clientWidth, h = stage.clientHeight;
    sats.forEach(s => {
      if (!s.path) return;
      s.g.getWorldPosition(v3);
      v3.project(cam);
      const x1 = ((v3.x + 1) / 2) * w, y1 = ((1 - v3.y) / 2) * h;
      s.anchor.getWorldPosition(v3);
      v3.project(cam);
      const x2 = ((v3.x + 1) / 2) * w, y2 = ((1 - v3.y) / 2) * h;
      const dx = x2 - x1, dy = y2 - y1;
      s.path.setAttribute('d', `M${x1 + dx * 0.5},${y1 + dy * 0.5} Q${x2},${y1 + dy * 0.5} ${x2},${y2}`);
      s.path.style.opacity = s.lblObj.element.style.opacity;
    });
  }
  loop();
}

/* ============================================================================
   3. SERVICES SECTION 3D HOLO-PEDESTAL SCENE
   ============================================================================ */
function initServicesScene() {
  const SV = {
    web: {
      t: 'Custom Web Apps',
      d: 'We build high-performance, scalable and secure web applications tailored to your business needs. From simple websites to complex systems — we turn your ideas into powerful digital products.',
      l: ['PHP / Laravel', '.NET & Python', 'API Integrations', 'Scalable Architecture', 'Ongoing Support']
    },
    crm: {
      t: 'CRM Development',
      d: 'Custom CRM platforms that centralise leads, customers and deals — with pipelines, reports and automations shaped around how your team actually sells.',
      l: ['Lead & Pipeline Management', 'Multi-tenant Architecture', 'Role-based Access', 'Reports & Dashboards', 'Email / WhatsApp Integration']
    },
    chat: {
      t: 'Chat Applications',
      d: 'Real-time messaging and collaboration tools — channels, direct messages, file sharing and notifications, built to stay fast as your team grows.',
      l: ['WebSockets / Real-time', 'Channels & DMs', 'File & Media Sharing', 'Push Notifications', 'End-to-end Security']
    },
    auto: {
      t: 'Business Process Automation',
      d: 'We map your repetitive work and replace it with reliable workflows — approvals, data syncing, reminders and reports that run on their own.',
      l: ['Workflow Design', 'Third-party API Sync', 'Scheduled Jobs & Triggers', 'Automated Reporting', 'Error Monitoring']
    },
    mobile: {
      t: 'Mobile App Development',
      d: 'Cross-platform iOS and Android apps with Flutter and Firebase — one codebase, native feel, and smooth release to the app stores.',
      l: ['Flutter (iOS & Android)', 'Firebase Backend', 'Offline Support', 'Push Notifications', 'Store Deployment']
    },
    ui: {
      t: 'UI/UX & Performance',
      d: 'Clean, modern interfaces that convert — plus performance tuning so every page loads fast and scores well on Core Web Vitals.',
      l: ['UX Research & Wireframes', 'Design Systems', 'Responsive Layouts', 'Core Web Vitals Tuning', 'Accessibility']
    }
  };

  const rows = [...document.querySelectorAll('.srow')];
  const card = document.getElementById('fcard');
  if (!card) return;

  let active = 'web', hov = null;

  function fill(k) {
    const tEl = document.getElementById('ft');
    const dEl = document.getElementById('fd');
    const lEl = document.getElementById('fl');
    if (tEl) tEl.textContent = SV[k].t;
    if (dEl) dEl.textContent = SV[k].d;
    if (lEl) lEl.innerHTML = SV[k].l.map(x => `<li>${x}</li>`).join('');
  }
  fill('web');

  let swapT;
  function show(k) {
    if (k === active) return;
    active = k;
    rows.forEach(r => r.classList.toggle('on', r.dataset.service === k));
    card.classList.add('swap');
    clearTimeout(swapT);
    swapT = setTimeout(() => {
      fill(k);
      card.classList.remove('swap');
    }, 300);
  }

  rows.forEach(r => {
    r.addEventListener('mouseenter', () => {
      hov = r.dataset.service;
      show(hov);
    });
    r.addEventListener('mouseleave', () => (hov = null));
    r.addEventListener('click', () => {
      show(r.dataset.service);
      window.__svcClicked = r.dataset.service;
    });
  });

  const sec = document.getElementById('services');
  if (sec) {
    new IntersectionObserver(
      e => e.forEach(x => x.isIntersecting && sec.classList.add('in')),
      { threshold: 0.12 }
    ).observe(sec);
  }

  const stage = document.getElementById('sstage');
  const canvas = document.getElementById('sc');
  if (!stage || !canvas) return;

  const R = new THREE.WebGLRenderer({ canvas, antialias: true });
  R.setPixelRatio(Math.min(devicePixelRatio, 2));
  R.shadowMap.enabled = true;
  R.shadowMap.type = THREE.PCFSoftShadowMap;

  const scene = new THREE.Scene();
  const BGL = new THREE.Color(0xeae5dc), BGD = new THREE.Color(0x0f0f15);
  scene.background = document.body.classList.contains('dark') ? BGD.clone() : BGL.clone();

  scene.environment = new THREE.PMREMGenerator(R).fromScene(new RoomEnvironment(), 0.04).texture;

  const cam = new THREE.PerspectiveCamera(34, 1, 0.1, 100);
  cam.position.set(0, 3.2, 15);
  cam.lookAt(0, -0.3, 0);

  const lr = new CSS2DRenderer();
  lr.domElement.style.cssText = 'position:absolute;inset:0;pointer-events:none';
  stage.appendChild(lr.domElement);

  const ambient = new THREE.AmbientLight(0xfff1e6, document.body.classList.contains('dark') ? 0.7 : 0.6);
  scene.add(ambient);
  const key = new THREE.DirectionalLight(0xffffff, document.body.classList.contains('dark') ? 1.5 : 1.2);
  key.position.set(4, 8, 6);
  key.castShadow = true;
  key.shadow.radius = 8;
  key.shadow.mapSize.set(1024, 1024);
  scene.add(key);

  const warm = new THREE.PointLight(0xff7a2a, document.body.classList.contains('dark') ? 14 : 7, 10);
  warm.position.y = -0.4;
  scene.add(warm);

  const root = new THREE.Group();
  scene.add(root);
  const world = new THREE.Group();
  root.add(world);

  const mkTex = (draw, w = 256, h = 256) => {
    const c = document.createElement('canvas');
    c.width = w;
    c.height = h;
    draw(c.getContext('2d'), w, h);
    const t = new THREE.CanvasTexture(c);
    t.colorSpace = THREE.SRGBColorSpace;
    t.anisotropy = 8;
    return t;
  };

  // Pedestal: Layered discs (adaptive metallic finish in dark mode, sculpted warm stone in light mode)
  const ped = new THREE.Group();
  world.add(ped);
  ped.position.y = -1.9;

  const pedMats = [];
  [
    [2.9, 0.45, -0.55, 0xd0c9be, 0x181a24],
    [2.4, 0.35, -0.15, 0xdcd6cb, 0x222634],
    [1.9, 0.25, 0.15, 0xe8e2d7, 0x2c3144]
  ].forEach(([r, h, y, lightCol, darkCol]) => {
    const isD = document.body.classList.contains('dark');
    const mat = new THREE.MeshPhysicalMaterial({
      color: isD ? darkCol : lightCol,
      roughness: isD ? 0.25 : 0.35,
      metalness: isD ? 0.45 : 0.12,
      clearcoat: 0.8
    });
    pedMats.push({ mat, lightCol, darkCol });
    const m = new THREE.Mesh(new THREE.CylinderGeometry(r, r, h, 96), mat);
    m.position.y = y;
    m.castShadow = m.receiveShadow = true;
    ped.add(m);

    const ring = new THREE.Mesh(
      new THREE.TorusGeometry(r + 0.01, 0.035, 12, 128),
      new THREE.MeshBasicMaterial({ color: 0xeb6412, toneMapped: false })
    );
    ring.rotation.x = Math.PI / 2;
    ring.position.y = y - h / 2 + 0.02;
    ped.add(ring);
  });

  const pglow = new THREE.Sprite(
    new THREE.SpriteMaterial({
      map: mkTex((g, w, h) => {
        const r = g.createRadialGradient(w / 2, h / 2, 0, w / 2, h / 2, w / 2);
        r.addColorStop(0, 'rgba(255,130,40,0.9)');
        r.addColorStop(0.5, 'rgba(255,120,40,0.2)');
        r.addColorStop(1, 'rgba(255,120,40,0)');
        g.fillStyle = r;
        g.fillRect(0, 0, w, h);
      }),
      transparent: true,
      depthWrite: false,
      blending: THREE.AdditiveBlending
    })
  );
  pglow.scale.set(8, 3, 1);
  pglow.position.y = -0.7;
  ped.add(pglow);

  // Dashed Rings
  const dashed = [];
  [
    [4.6, 0xff8a3d],
    [5.6, 0x9aa8ff]
  ].forEach(([r, c], i) => {
    const pts = new THREE.EllipseCurve(0, 0, r, r).getPoints(240).map(p => new THREE.Vector3(p.x, 0, p.y));
    const l = new THREE.LineLoop(
      new THREE.BufferGeometry().setFromPoints(pts),
      new THREE.LineDashedMaterial({ color: c, dashSize: 0.18, gapSize: 0.14, transparent: true, opacity: 0.7 })
    );
    l.computeLineDistances();
    l.position.y = i ? -2.4 : -0.2;
    world.add(l);
    dashed.push(l);
  });

  // Center Reactor Cube
  const cube = makeClearCube();
  cube.position.y = 0.1;
  world.add(cube);

  const om = new THREE.MeshStandardMaterial({ color: 0xff6a1a, emissive: 0xff5a0a, emissiveIntensity: 0.5, roughness: 0.3 });
  const orbs = [];
  for (let i = 0; i < 5; i++) {
    const m = new THREE.Mesh(new THREE.SphereGeometry(0.1 + (i % 2) * 0.06, 24, 24), om);
    m.userData.a = i * 1.3;
    m.userData.r = 4.6 + (i % 2);
    orbs.push(m);
    world.add(m);
  }

  // 3D Service Tiles
  const TL = [
    ['crm', 'CRM', '#dfe6ff', '#5b7cff', -2.4, 2.5],
    ['chat', 'Chat', '#d6f5ea', '#13a37a', 1.7, 2.7],
    ['web', 'Web Apps', '#ff7a22', '#ffffff', -3.7, 0.8],
    ['auto', 'Automation', '#fbe0f0', '#c0287a', 3.7, 0.8],
    ['ui', 'UI/UX', '#ffe9cf', '#e07b00', -3.0, -1.3],
    ['mobile', 'Mobile Apps', '#ece2ff', '#7d4cff', 3.1, -1.1]
  ];

  function icon(g, k, c) {
    g.fillStyle = c;
    g.strokeStyle = c;
    g.lineWidth = 14;
    g.lineCap = g.lineJoin = 'round';
    const cx = 128, cy = 118;
    g.beginPath();
    if (k === 'crm') {
      g.arc(100, 130, 30, 0, 7);
      g.arc(140, 112, 40, 0, 7);
      g.arc(172, 135, 26, 0, 7);
      g.fill();
      g.fillRect(100, 128, 72, 32);
    } else if (k === 'chat') {
      g.roundRect(66, 72, 124, 88, 24);
      g.fill();
      g.beginPath();
      g.moveTo(90, 150);
      g.lineTo(80, 186);
      g.lineTo(120, 155);
      g.fill();
      g.fillStyle = '#fff';
      [100, 128, 156].forEach(x => {
        g.beginPath();
        g.arc(x, 116, 9, 0, 7);
        g.fill();
      });
    } else if (k === 'web') {
      g.moveTo(98, 82);
      g.lineTo(62, 118);
      g.lineTo(98, 154);
      g.moveTo(158, 82);
      g.lineTo(194, 118);
      g.lineTo(158, 154);
      g.moveTo(140, 72);
      g.lineTo(116, 164);
      g.stroke();
    } else if (k === 'auto') {
      for (let i = 0; i < 8; i++) {
        g.save();
        g.translate(cx, cy);
        g.rotate((i * Math.PI) / 4);
        g.fillRect(-11, -62, 22, 26);
        g.restore();
      }
      g.beginPath();
      g.arc(cx, cy, 42, 0, 7);
      g.fill();
      g.fillStyle = '#fbe0f0';
      g.beginPath();
      g.arc(cx, cy, 16, 0, 7);
      g.fill();
    } else if (k === 'ui') {
      g.ellipse(cx, cy, 64, 54, 0, 0, 7);
      g.fill();
      g.fillStyle = '#fff';
      [
        [100, 100, '#ff5a5a'],
        [128, 88, '#5b7cff'],
        [156, 102, '#13a37a'],
        [106, 132, '#fff']
      ].forEach(([x, y, col]) => {
        g.fillStyle = col;
        g.beginPath();
        g.arc(x, y, 10, 0, 7);
        g.fill();
      });
      g.fillStyle = '#ffe9cf';
      g.beginPath();
      g.arc(156, 140, 14, 0, 7);
      g.fill();
    } else {
      g.roundRect(94, 58, 68, 120, 14);
      g.fill();
      g.fillStyle = '#ece2ff';
      g.fillRect(104, 74, 48, 84);
      g.beginPath();
      g.arc(128, 168, 5, 0, 7);
      g.fill();
    }
  }

  const tiles = [];
  const tileBodies = [];
  TL.forEach(([k, name, bg, fg, x, y], i) => {
    const g = new THREE.Group();
    const isD = document.body.classList.contains('dark');
    const bodyMat = new THREE.MeshPhysicalMaterial({
      color: isD ? 0x1a1d2c : 0xf4efe8,
      roughness: 0.22,
      clearcoat: 0.8,
      metalness: isD ? 0.35 : 0.08,
      envMapIntensity: 0.7,
      emissive: new THREE.Color(0xff6a1a),
      emissiveIntensity: 0
    });
    tileBodies.push(bodyMat);
    const body = new THREE.Mesh(
      new RoundedBoxGeometry(1.35, 1.35, 0.42, 6, 0.2),
      bodyMat
    );
    body.castShadow = true;
    g.add(body);

    const face = new THREE.Mesh(
      new THREE.PlaneGeometry(1.08, 1.08),
      new THREE.MeshBasicMaterial({
        map: mkTex((c, w, h) => {
          c.fillStyle = bg;
          c.beginPath();
          c.roundRect(8, 8, 240, 240, 54);
          c.fill();
          icon(c, k, fg);
        }),
        transparent: true
      })
    );
    face.position.z = 0.22;
    g.add(face);

    const lab = document.createElement('div');
    lab.className = 'slbl';
    lab.textContent = name;
    const lo = new CSS2DObject(lab);
    lo.position.set(0, -1.02, 0);
    g.add(lo);

    g.position.set(x, y, 0);
    g.userData = {
      k,
      base: new THREE.Vector3(x, y, Math.abs(x) < 2.5 ? -1 : 0.6),
      body,
      lab,
      ph: i * 1.1,
      s: 0,
      glow: 0
    };
    world.add(g);
    tiles.push(g);
  });

  function syncServicesTheme() {
    const isDark = document.body.classList.contains('dark');
    scene.background = isDark ? BGD.clone() : BGL.clone();
    pedMats.forEach(({ mat, lightCol, darkCol }) => {
      mat.color.set(isDark ? darkCol : lightCol);
      mat.metalness = isDark ? 0.45 : 0.05;
      mat.needsUpdate = true;
    });
    tileBodies.forEach(m => {
      m.color.set(isDark ? 0x1a1d2c : 0xffffff);
      m.metalness = isDark ? 0.35 : 0;
      m.needsUpdate = true;
    });
  }
  new MutationObserver(() => syncServicesTheme()).observe(document.body, { attributes: true, attributeFilter: ['class'] });

  const sh = new THREE.Mesh(new THREE.PlaneGeometry(30, 30), new THREE.ShadowMaterial({ opacity: 0.07 }));
  sh.rotation.x = -Math.PI / 2;
  sh.position.y = -2.6;
  sh.receiveShadow = true;
  scene.add(sh);

  const comp = new EffectComposer(R);
  comp.addPass(new RenderPass(scene, cam));
  comp.addPass(new UnrealBloomPass(new THREE.Vector2(1, 1), 0.5, 0.5, 1.02));
  comp.addPass(new OutputPass());

  function size() {
    const w = stage.clientWidth, h = stage.clientHeight;
    R.setSize(w, h, false);
    comp.setSize(w, h);
    lr.setSize(w, h);
    cam.aspect = w / h;
    cam.position.z = w < 600 ? 19.5 : 15;
    cam.updateProjectionMatrix();
  }
  window.addEventListener('resize', size);
  size();

  // Interaction
  const ray = new THREE.Raycaster(), m2 = new THREE.Vector2();
  let tHover = null, mx = 0, my = 0, down = false, moved = 0, lx = 0, vy = 0, spin = 0;

  function pick(e) {
    const r = canvas.getBoundingClientRect();
    m2.set(((e.clientX - r.left) / r.width) * 2 - 1, -((e.clientY - r.top) / r.height) * 2 + 1);
    ray.setFromCamera(m2, cam);
    const h = ray.intersectObjects(tiles, true)[0];
    if (!h) return null;
    let o = h.object;
    while (o && !o.userData.k) o = o.parent;
    return o;
  }

  canvas.addEventListener('pointermove', e => {
    const r = canvas.getBoundingClientRect();
    mx = (e.clientX - r.left) / r.width - 0.5;
    my = (e.clientY - r.top) / r.height - 0.5;
    if (down) {
      vy = (e.clientX - lx) * 0.004;
      moved += Math.abs(e.clientX - lx);
      lx = e.clientX;
    }
    const t = pick(e);
    const k = t ? t.userData.k : null;
    if (k !== tHover) {
      tHover = k;
      if (k) show(k);
    }
    canvas.style.cursor = k ? 'pointer' : down ? 'grabbing' : 'grab';
  });

  canvas.addEventListener('pointerleave', () => (tHover = null));
  canvas.addEventListener('pointerdown', e => {
    down = true;
    moved = 0;
    lx = e.clientX;
  });
  window.addEventListener('pointerup', () => (down = false));

  canvas.addEventListener('click', e => {
    if (moved > 6) return;
    const t = pick(e);
    if (!t) return;
    const a = document.querySelector(`.srow[data-service="${t.userData.k}"]`);
    if (a) a.click();
  });

  let visible = false;
  new IntersectionObserver(e => (visible = e[0].isIntersecting)).observe(stage);

  const clock = new THREE.Clock();
  let start = null;
  const ease = t => 1 - Math.pow(1 - Math.min(Math.max(t, 0), 1), 3);

  function loop() {
    requestAnimationFrame(loop);
    if (!visible) return;
    const t = clock.getElapsedTime();
    if (start === null) start = t;
    const e = t - start;

    cube.scale.setScalar(0.4 + 0.6 * ease(e / 1.4));
    cubeTick(cube, t);
    cube.position.y = 0.15 + Math.sin(t * 1.1) * 0.1;

    if (!down) vy *= 0.94;
    spin += vy;
    root.rotation.y += (mx * 0.3 + spin * 0.0 - root.rotation.y) * 0.05;
    root.rotation.x += (my * 0.12 - root.rotation.x) * 0.05;

    world.rotation.y = Math.max(-0.6, Math.min(0.6, spin));
    spin *= 0.985;

    dashed[0].rotation.y = t * 0.05;
    dashed[1].rotation.y = -t * 0.03;
    dashed.forEach(d => (d.material.opacity = 0.7 * ease((e - 0.5) / 1)));

    orbs.forEach((o, i) => {
      const a = o.userData.a + t * 0.25 * (i % 2 ? -1 : 1);
      o.position.set(Math.cos(a) * o.userData.r, -0.2 - (i % 2) * 2.2 + Math.sin(t + i) * 0.1, Math.sin(a) * o.userData.r);
    });

    pglow.material.opacity = 0.16 + 0.08 * Math.sin(t * 2);
    warm.intensity = 6 + 3 * Math.sin(t * 2);

    tiles.forEach((g, i) => {
      const u = g.userData, on = u.k === active, se = ease((e - 0.4 - i * 0.12) / 1);
      const tg = on ? 1 : 0;
      u.glow += (tg - u.glow) * 0.1;
      g.position.set(u.base.x, u.base.y + Math.sin(t * 1.2 + u.ph) * 0.15, u.base.z + u.glow * 1.4);
      g.scale.setScalar(Math.max(0.001, se * 1.05 * (1 + u.glow * 0.2)));
      g.rotation.set(Math.sin(t * 0.7 + u.ph) * 0.08, -u.base.x * 0.06 + Math.sin(t * 0.5 + u.ph) * 0.12, Math.sin(t * 0.6 + u.ph) * 0.04);
      u.body.material.emissiveIntensity = u.glow * 0.35;
      u.lab.classList.toggle('hi', on);
      u.lab.style.opacity = se;
    });

    comp.render();
    lr.render(scene, cam);
  }
  loop();

  function updateServicesTheme() {
    const isD = document.body.classList.contains('dark');
    scene.background = isD ? BGD.clone() : BGL.clone();
    pedMats.forEach(({ mat, lightCol, darkCol }) => {
      mat.color.set(isD ? darkCol : lightCol);
      mat.metalness = isD ? 0.45 : 0.12;
      mat.roughness = isD ? 0.25 : 0.35;
    });
    tileBodies.forEach(m => {
      m.color.set(isD ? 0x1a1d2c : 0xf4efe8);
      m.metalness = isD ? 0.35 : 0.08;
    });
    key.intensity = isD ? 1.5 : 1.2;
    ambient.intensity = isD ? 0.7 : 0.6;
    warm.intensity = isD ? 14 : 7;
  }
  new MutationObserver(updateServicesTheme).observe(document.body, { attributes: true, attributeFilter: ['class'] });
}

/* ============================================================================
   4. FEATURED PROJECTS SHOWCASE & MOUSE PARALLAX
   ============================================================================ */
function initFeaturedProjects() {
  const sec = document.getElementById('projects');
  if (!sec) return;

  new IntersectionObserver(
    e => e.forEach(x => x.isIntersecting && sec.classList.add('in')),
    { threshold: 0.08 }
  ).observe(sec);

  const SLIDES = [
    {
      t: 'Multi-tenant<br><span>CRM System</span>',
      d: 'A powerful multi-tenant CRM platform with lead management, analytics, real-time updates and 7-level RBAC. Built for scale and security.',
      c: ['PHP', 'MySQL', 'Laravel', 'WebSockets'],
      f: ['Lead Management', 'Real-time Analytics', '7-Level RBAC', 'Secure & Scalable'],
      img: 'images/crm-1.svg',
      url: 'javascript:void(0)'
    },
    {
      t: 'CRM<br><span>Lead Pipelines</span>',
      d: 'Kanban pipelines that move leads from first touch to closed deal, with automatic assignment and reminders.',
      c: ['Laravel', 'Vue', 'Redis'],
      f: ['Drag & Drop Stages', 'Auto Assignment', 'Follow-up Reminders', 'Activity Timeline'],
      img: 'images/crm-2.svg',
      url: 'javascript:void(0)'
    },
    {
      t: 'CRM<br><span>Reports</span>',
      d: 'Live reports and exports for every tenant — conversions, team performance and revenue forecasts.',
      c: ['PHP', 'MySQL', 'Chart.js'],
      f: ['Custom Reports', 'CSV / PDF Export', 'Scheduled Emails', 'Team KPIs'],
      img: 'images/crm-3.svg',
      url: 'javascript:void(0)'
    },
    {
      t: 'CRM<br><span>Analytics</span>',
      d: 'Real-time analytics dashboards powered by WebSockets, so managers see every change the moment it happens.',
      c: ['Node.js', 'WebSockets', 'MySQL'],
      f: ['Live Dashboards', 'Lead Sources', 'Funnel Analysis', 'Role-based Views'],
      img: 'images/crm-4.svg',
      url: 'javascript:void(0)'
    }
  ];

  const W = document.getElementById('featWrap');
  if (!W) return;

  const th = [...W.querySelectorAll('.thumbs a')];
  const fpT = document.getElementById('fpT');
  const fpD = document.getElementById('fpD');
  const fpC = document.getElementById('fpC');
  const fpF = document.getElementById('fpF');
  const fpI = document.getElementById('fpI');
  const fpL = document.getElementById('fpL');
  const fpN = document.getElementById('fpN');
  const fpPrev = document.getElementById('fpPrev');
  const fpNext = document.getElementById('fpNext');

  let cur = 0, tm;

  function go(i) {
    i = (i + SLIDES.length) % SLIDES.length;
    if (i === cur) return;
    cur = i;
    W.classList.add('swap');
    th.forEach((a, k) => a.classList.toggle('on', k === i));
    clearTimeout(tm);
    tm = setTimeout(() => {
      const s = SLIDES[i];
      if (fpT) fpT.innerHTML = s.t;
      if (fpD) fpD.textContent = s.d;
      if (fpC) fpC.innerHTML = s.c.map(x => `<span>${x}</span>`).join('');
      if (fpF) fpF.innerHTML = s.f.map(x => `<div>${x}</div>`).join('');
      if (fpI) fpI.src = s.img;
      if (fpL) fpL.href = s.url;
      if (fpN) fpN.textContent = `0${i + 1} / 0${SLIDES.length}`;
      W.classList.remove('swap');
    }, 420);
  }

  if (fpPrev) fpPrev.onclick = () => go(cur - 1);
  if (fpNext) fpNext.onclick = () => go(cur + 1);
  th.forEach(a => (a.onclick = () => go(+a.dataset.i)));

  let auto = setInterval(() => go(cur + 1), 7000);
  W.addEventListener('mouseenter', () => clearInterval(auto));

  // 3D perspective mouse tilt on project cards
  document.querySelectorAll('.pc').forEach(c => {
    c.addEventListener('mousemove', e => {
      const r = c.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width - 0.5;
      const y = (e.clientY - r.top) / r.height - 0.5;
      c.style.transform = `perspective(900px) rotateY(${x * 8}deg) rotateX(${-y * 6}deg) translateY(-8px)`;
    });
    c.addEventListener('mouseleave', () => (c.style.transform = ''));
  });

  // Laptop Parallax
  W.addEventListener('mousemove', e => {
    const r = W.getBoundingClientRect();
    const x = (e.clientX - r.left) / r.width - 0.5;
    const y = (e.clientY - r.top) / r.height - 0.5;
    const lap = W.querySelector('.laptop');
    const flist = W.querySelector('.flist');
    if (lap) lap.style.transform = `translate(${x * 14}px,${y * 10}px)`;
    if (flist) flist.style.transform = `perspective(600px) rotateY(-14deg) translate(${x * -10}px,${y * -8}px)`;
  });
}

/* ============================================================================
   5. ABOUT SECTION (STATS COUNTER & SKILL BARS)
   ============================================================================ */
function initAboutSection() {
  const sec = document.getElementById('about');
  if (!sec) return;

  const io = new IntersectionObserver(
    es =>
      es.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.classList.add('in');
        io.unobserve(e.target);

        if (e.target.classList.contains('stats')) {
          e.target.querySelectorAll('[data-to]').forEach(el => {
            const to = +el.dataset.to, t0 = performance.now();
            const f = t => {
              const p = Math.min((t - t0) / 1400, 1);
              el.textContent = Math.round(to * (1 - Math.pow(1 - p, 3)));
              if (p < 1) requestAnimationFrame(f);
            };
            requestAnimationFrame(f);
          });
        }
      }),
    { threshold: 0.15 }
  );

  sec.querySelectorAll('.av').forEach(el => io.observe(el));

  const skillsEl = sec.querySelector('.skills');
  if (skillsEl) {
    new IntersectionObserver(e => e[0].isIntersecting && sec.classList.add('in'), { threshold: 0.1 }).observe(skillsEl);
  }

  const pf = document.getElementById('pframe');
  if (pf) {
    pf.addEventListener('mousemove', e => {
      const r = pf.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width - 0.5;
      const y = (e.clientY - r.top) / r.height - 0.5;
      pf.style.transform = `perspective(1000px) rotateY(${x * 6}deg) rotateX(${-y * 5}deg)`;
    });
    pf.addEventListener('mouseleave', () => (pf.style.transform = ''));
  }
}

/* ============================================================================
   6. TESTIMONIALS & CTA (STACKED DECK & SPOTLIGHT)
   ============================================================================ */
function initTestimonialsAndCta() {
  const RM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const io = new IntersectionObserver(
    es =>
      es.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      }),
    { threshold: 0.15 }
  );
  document.querySelectorAll('.tv').forEach(el => io.observe(el));

  const cta = document.getElementById('cta');
  if (cta) {
    new IntersectionObserver(e => e[0].isIntersecting && cta.classList.add('in'), { threshold: 0.3 }).observe(cta);
  }

  // Marquee loop: duplicate content
  ['mr1', 'mr2'].forEach(id => {
    const r = document.getElementById(id);
    if (!r) return;
    r.innerHTML += r.innerHTML;
    [...r.children].slice(r.children.length / 2).forEach(c => c.setAttribute('aria-hidden', 'true'));
  });

  // Stacked Card Deck
  const deck = document.getElementById('deck');
  if (deck) {
    const cards = [...deck.querySelectorAll('.qc')];
    const dots = document.getElementById('dDots');
    const dPrev = document.getElementById('dPrev');
    const dNext = document.getElementById('dNext');
    let top = 0;

    if (dots) {
      cards.forEach((_, i) => {
        const d = document.createElement('i');
        d.onclick = () => {
          top = i;
          lay();
        };
        dots.appendChild(d);
      });
    }

    function lay(dx = 0) {
      const n = cards.length;
      cards.forEach((c, i) => {
        const k = (i - top + n) % n;
        if (k === 0) {
          c.style.transform = `translateX(${dx}px) rotate(${dx * 0.03}deg)`;
          c.style.zIndex = n;
          c.style.opacity = 1;
          c.style.filter = 'none';
        } else {
          c.style.transform = `translate(${k * 22}px,${-k * 16}px) rotate(${k * 2.5}deg) scale(${1 - k * 0.05})`;
          c.style.zIndex = n - k;
          c.style.opacity = k > 3 ? 0 : 1 - k * 0.12;
          c.style.filter = `blur(${k * 0.4}px)`;
        }
        c.setAttribute('aria-hidden', k ? 'true' : 'false');
      });
      if (dots) {
        [...dots.children].forEach((d, i) => d.classList.toggle('on', i === top));
      }
    }
    lay();

    const go = s => {
      top = (top + s + cards.length) % cards.length;
      lay();
    };
    if (dPrev) dPrev.onclick = () => go(-1);
    if (dNext) dNext.onclick = () => go(1);

    let sx = null, dx = 0;
    deck.addEventListener('pointerdown', e => {
      sx = e.clientX;
      dx = 0;
      cards[top].style.transition = 'none';
      deck.setPointerCapture(e.pointerId);
    });
    deck.addEventListener('pointermove', e => {
      if (sx === null) return;
      dx = e.clientX - sx;
      lay(dx);
    });

    const end = () => {
      if (sx === null) return;
      cards[top].style.transition = '';
      sx = null;
      if (Math.abs(dx) > 80) go(dx < 0 ? 1 : -1);
      else lay();
      dx = 0;
    };
    deck.addEventListener('pointerup', end);
    deck.addEventListener('pointercancel', end);

    window.addEventListener('keydown', e => {
      if (!deck.matches(':hover')) return;
      if (e.key === 'ArrowRight') go(1);
      if (e.key === 'ArrowLeft') go(-1);
    });

    let auto = RM ? null : setInterval(() => go(1), 6500);
    deck.addEventListener('pointerenter', () => clearInterval(auto));
  }

  // CTA Spotlight & Magnetic Button
  const cb = document.getElementById('cblock');
  const mag = document.getElementById('mag');
  if (cb) {
    cb.addEventListener('pointermove', e => {
      const r = cb.getBoundingClientRect();
      cb.style.setProperty('--mx', e.clientX - r.left + 'px');
      cb.style.setProperty('--my', e.clientY - r.top + 'px');
    });
  }

  if (mag && !RM && window.matchMedia('(hover:hover)').matches) {
    mag.addEventListener('pointermove', e => {
      const r = mag.getBoundingClientRect();
      mag.style.transform = `translate(${(e.clientX - r.left - r.width / 2) * 0.3}px, ${(e.clientY - r.top - r.height / 2) * 0.4}px)`;
    });
    mag.addEventListener('pointerleave', () => (mag.style.transform = ''));
  }
}

/* ============================================================================
   7. CONTACT FORM, VALIDATION & FOOTER ENGINE
   ============================================================================ */
function initContactAndFooter() {
  const RM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const io = new IntersectionObserver(
    es =>
      es.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      }),
    { threshold: 0.12 }
  );
  document.querySelectorAll('.cv2').forEach(el => io.observe(el));

  // Copy socials into footer
  const s = document.querySelector('.icard .socials');
  const fsoc = document.getElementById('fsoc');
  if (s && fsoc) fsoc.innerHTML = s.innerHTML;

  // Auto copyright year
  const yrEl = document.getElementById('yr');
  if (yrEl) yrEl.textContent = new Date().getFullYear();

  // Back to top button
  const btt = document.getElementById('btt');
  if (btt) {
    btt.onclick = () => window.scrollTo({ top: 0, behavior: RM ? 'auto' : 'smooth' });
  }

  // Contact Form Engine
  const f = document.getElementById('cform');
  if (f) {
    const sel = f.querySelector('#f_service');
    const sc = [...document.querySelectorAll('#svcChips button')];

    const syncSvc = () => sc.forEach(b => b.classList.toggle('on', b.dataset.v === sel.value));

    sc.forEach(
      b =>
        (b.onclick = () => {
          sel.value = b.dataset.v;
          syncSvc();
          check(sel);
        })
    );

    sel.addEventListener('change', () => {
      syncSvc();
      check(sel);
    });

    function check(el) {
      const w = el.closest('.fl');
      let ok = el.checkValidity();
      if (el.type === 'email' && el.value) {
        ok = ok && /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(el.value);
      }
      if (w) {
        w.classList.toggle('bad', !ok);
        w.classList.toggle('ok', ok && !!el.value);
      }
      return ok;
    }

    const fields = [...f.querySelectorAll('.fl input, .fl select, .fl textarea')];
    fields.forEach(el => {
      el.addEventListener('blur', () => {
        if (el.value || el.dataset.t) check(el);
        el.dataset.t = '1';
      });
      el.addEventListener('input', () => {
        const parent = el.closest('.fl');
        if (parent && parent.classList.contains('bad')) check(el);
      });
    });

    const btn = document.getElementById('sbtn');
    const g = document.getElementById('fglass');

    f.addEventListener('submit', e => {
      e.preventDefault();

      // HoneyPot check: reject bot submissions silently
      if (f.website && f.website.value) return;

      const ok = fields.map(check).every(Boolean);
      if (!ok) {
        const b = f.querySelector('.fl.bad input, .fl.bad select, .fl.bad textarea');
        if (b) b.focus();
        return;
      }

      if (btn) btn.classList.add('loading');
      setTimeout(() => {
        if (btn) {
          btn.classList.remove('loading');
          btn.classList.add('done');
          const tx = btn.querySelector('.tx');
          if (tx) tx.textContent = 'Sent ✓';
        }
        setTimeout(() => {
          if (g) g.classList.add('sent');
        }, RM ? 0 : 500);
      }, RM ? 100 : 1400);
    });

    const fagain = document.getElementById('fagain');
    if (fagain) {
      fagain.onclick = () => {
        f.reset();
        bud.value = '';
        syncSvc();
        bc.forEach(x => x.classList.remove('on'));
        fields.forEach(el => {
          const parent = el.closest('.fl');
          if (parent) parent.classList.remove('ok', 'bad');
          delete el.dataset.t;
        });
        if (btn) {
          btn.classList.remove('done');
          const tx = btn.querySelector('.tx');
          if (tx) tx.innerHTML = 'Send Message &nbsp;→';
        }
        if (g) g.classList.remove('sent');
      };
    }
  }

  // Newsletter Form
  const nlform = document.getElementById('nlform');
  if (nlform) {
    nlform.addEventListener('submit', e => {
      e.preventDefault();
      const i = e.target.newsletter_email;
      const m = document.getElementById('nlmsg');
      const ok = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(i.value);
      if (m) {
        m.classList.toggle('bad', !ok);
        m.textContent = ok ? "Thanks! You're on the list." : 'Please enter a valid email.';
      }
      if (ok) i.value = '';
    });
  }

  // Smooth Navigation Anchor Scroll & ScrollSpy
  const links = [...document.querySelectorAll('nav .links a')];
  const ids = ['home', 'services', 'projects', 'reviews', 'contact'];

  document.querySelectorAll('a[href^="#"]').forEach(a =>
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: RM ? 'auto' : 'smooth' });
      window.history.replaceState(null, '', a.getAttribute('href'));
    })
  );

  const secs = ids.map(id => document.getElementById(id)).filter(Boolean);
  function act() {
    let cur = secs[0]?.id;
    const y = window.innerHeight * 0.35;
    secs.forEach(s => {
      if (s.getBoundingClientRect().top <= y) cur = s.id;
    });
    links.forEach(a => {
      const href = a.getAttribute('href');
      if (href && href.startsWith('#')) {
        a.classList.toggle('on', href === '#' + cur);
      }
    });
  }

  if (links.length) {
    window.addEventListener('scroll', act, { passive: true });
    act();
  }
}

/* ============================================================================
   8. APPLICATION BOOTSTRAP
   ============================================================================ */
function bootstrap() {
  initSplash();
  initHeroScene();
  initServicesScene();
  initFeaturedProjects();
  initAboutSection();
  initTestimonialsAndCta();
  initContactAndFooter();
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', bootstrap);
} else {
  bootstrap();
}
