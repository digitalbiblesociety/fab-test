import{S as g,i as h,s as _,e as v,c as y,b as x,d as b,f as k,g as d,j as p,k as G,m as S,t as j,n as D,o as N}from"./index.92d3769b.js";import{G as V,d as m,c as u,e as f,a as q}from"./l10n.module.6684bd7a.js";import"./countriesByContinent.ebc4ca46.js";function w(s){let t,a,i;return a=new V({props:{columns:s[2],data:s[1],sort:!0,search:!0,pagination:{enabled:!0,limit:10},language:{ar:m,cn:u,en:{},es:f}[s[0]]}}),{c(){t=v("div"),y(a.$$.fragment),this.h()},l(e){t=x(e,"DIV",{class:!0});var n=b(t);k(a.$$.fragment,n),n.forEach(d),this.h()},h(){p(t,"class","flex flex-row")},m(e,n){G(e,t,n),S(a,t,null),i=!0},p(e,[n]){const r={};n&4&&(r.columns=e[2]),n&2&&(r.data=e[1]),n&1&&(r.language={ar:m,cn:u,en:{},es:f}[e[0]]),a.$set(r)},i(e){i||(j(a.$$.fragment,e),i=!0)},o(e){D(a.$$.fragment,e),i=!1},d(e){e&&d(t),N(a)}}}function z(s,t,a){let i,e,{t:n={}}=t,{data:r}=t,{locale:o}=t;return s.$$set=l=>{"t"in l&&a(3,n=l.t),"data"in l&&a(4,r=l.data),"locale"in l&&a(0,o=l.locale)},s.$$.update=()=>{s.$$.dirty&1&&a(2,i=[{id:"tt",name:"Name",formatter:(l,c)=>q(`<a class="hover:underline" href="/${o}/languages/${c.cells[2].data}"><div class="font-medium text-gray-900 dark:text-stone-200">${c.cells[0].data}</div><div class="text-gray-500 dark:text-stone-300">${c.cells[1].data??""}</div></a>`)},{id:"tv",name:"Vernacular Name",hidden:!0},{id:"url",name:"",hidden:!0},{id:"tp",name:"Type"}]),s.$$.dirty&16&&a(1,e=r)},[o,e,i,n,r]}class O extends g{constructor(t){super(),h(this,t,z,w,_,{t:3,data:4,locale:0})}}export{O as default};
