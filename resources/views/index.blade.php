<livewire:layouts.header :title="'EmpresarioDigital | Home'" />
<livewire:layouts.navbar-main />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap');

    html,
    body,
    svg,
    .bg {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        font-family: 'Roboto', sans-serif;
        font-size: 19px;
    }

    body {
        background: #000;
    }

    .bg {
        background: linear-gradient(165deg, black 30%, darkblue 200%);
    }
</style>
<div class="bg"></div>
<svg stroke="#fff" stroke-linecap="round">
    <g class="stage">
        <rect width="100%" height="100%" fill="rgba(0,0,0,0)" stroke="none" />
    </g>
    <g class="toggle" style="cursor:pointer;user-select:none">
        <path d="M100,20 118,20" stroke-width="25" />
        <path class="knob" d="M100,20 100,20" stroke-width="20" stroke="#000" />
        <text class="txt1" fill="#fff" x="11" y="26">Manual</text>
        <text class="txt2" fill="#fff" x="144" y="26" opacity="0.3">Auto</text>
    </g>
</svg>
<script>
    let auto = false
    const m = {x:0, y:0},
          stage = document.querySelector('.stage'),
          toggle = document.querySelector('.toggle')
    
    window.onpointerdown = window.onpointermove = (e)=>{
      m.x = e.clientX
      m.y = e.clientY
    }
    
    stage.onpointerup = (e)=>{
      gsap.killTweensOf(autoPlay)
      gsap.killTweensOf(fire)
      auto = true
      toggleAuto()
      fire(m)
    }
    
    function fire(m){
      
      const firework = document.createElementNS('http://www.w3.org/2000/svg', 'g'),
            trail = document.createElementNS('http://www.w3.org/2000/svg', 'g'),
            ring = document.createElementNS('http://www.w3.org/2000/svg', 'g'),
            hsl = 'hsl('+gsap.utils.random(0,360,1)+',100%,50%)'
      
      stage.appendChild(firework)
      firework.appendChild(trail)
      firework.appendChild(ring)
      
      for (let i=1; i<5; i++){
        const t = document.createElementNS('http://www.w3.org/2000/svg', 'path')
        gsap.set(t, {x:m.x, y:innerHeight, opacity:0.25, attr:{'stroke-width':i, d:'M0,0 0,'+innerHeight}})
        gsap.to(t, {y:m.y, ease:'expo'})// for some reason this can't be combined with the above set() in a fromTo() without generating errors ¯\_(ツ)_/¯
        trail.appendChild(t)    
      }
      
      for (let i=0; i<gsap.utils.random(5,8,1); i++){
        const c = document.createElementNS('http://www.w3.org/2000/svg', 'circle')
        gsap.set(c, {x:m.x, y:m.y, attr:{class:'core', r:()=>(i+1)*25, fill:'none', stroke:hsl, 'stroke-width':gsap.utils.random(1.5,3.4), 'stroke-dasharray':'1 '+gsap.utils.random(15,30,1)}})
        ring.appendChild(c)
      }
        
      gsap.timeline({onComplete:()=>stage.removeChild(firework)})
        .to(trail.children, {duration:0.2, attr:{d:'M0,0 0,0'}, stagger:-0.08, ease:'expo.inOut'}, 0)
        .to(trail.children, {duration:0.4, scale:()=>gsap.utils.random(40,80,1), attr:{stroke:hsl}, stagger:-0.15, ease:'expo'}, 0.4)
        .to(trail.children, {duration:0.3, opacity:0, ease:'power2.inOut', stagger:-0.1}, 0.5)
        .from(ring.children, {duration:1, scale:0, stagger:0.05, ease:'expo'}, 0.4)
        .to(ring.children, {opacity:0, stagger:0.1, ease:'sine.inOut'}, 0.7)
        .to(ring.children, {duration:1, y:'+=30', ease:'power2.in'}, 0.7)
    }
    
    toggle.onpointerup = toggleAuto
    
    function toggleAuto(){
      auto = !auto
      gsap.timeline({defaults:{duration:0.3, ease:'power2.inOut'}})
        .to('.knob', {x:()=>(auto)?18:0}, 0)
        .to('.txt1', {opacity:(i)=>(auto)?0.3:1}, 0)
        .to('.txt2', {opacity:(i)=>(auto)?1:0.3}, 0)
      if (auto) autoPlay()
      else {
        gsap.killTweensOf(autoPlay)
        gsap.killTweensOf(fire)
      }
    }
    
    function autoPlay(){
      for (let i=0; i<gsap.utils.random(3,9,1); i++){
        gsap.delayedCall(i/2, fire, [{x:gsap.utils.random(99, innerWidth-99, 1), y:gsap.utils.random(99, innerHeight-99, 1)}])
      }  
      (auto) ? gsap.delayedCall(3.5,autoPlay) : gsap.killTweensOf(autoPlay)
    }
    
    toggleAuto()
</script>

<livewire:layouts.footer>