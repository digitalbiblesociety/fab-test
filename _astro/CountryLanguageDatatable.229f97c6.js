import{S as _,i as b,s as v,e as p,c as y,b as x,d as C,f as k,g as c,j as G,k as N,m as j,t as D,n as F,o as I}from"./index.92d3769b.js";import{G as S,d,c as u,e as f,a as g}from"./l10n.module.6684bd7a.js";import"./countriesByContinent.ebc4ca46.js";function V(s){let a,t,o;return t=new S({props:{columns:s[2],data:s[1],sort:!0,search:!0,pagination:{enabled:!0,limit:14},language:{ar:d,cn:u,en:{},es:f}[s[0]]}}),{c(){a=p("div"),y(t.$$.fragment),this.h()},l(e){a=x(e,"DIV",{class:!0});var n=C(a);k(t.$$.fragment,n),n.forEach(c),this.h()},h(){G(a,"class","flex flex-row")},m(e,n){N(e,a,n),j(t,a,null),o=!0},p(e,[n]){const i={};n&4&&(i.columns=e[2]),n&2&&(i.data=e[1]),n&1&&(i.language={ar:d,cn:u,en:{},es:f}[e[0]]),t.$set(i)},i(e){o||(D(t.$$.fragment,e),o=!0)},o(e){F(t.$$.fragment,e),o=!1},d(e){e&&c(a),I(t)}}}function q(s,a,t){let o,e,{t:n={}}=a,{data:i}=a,{locale:l}=a;const h=new Intl.NumberFormat(l);return s.$$set=r=>{"t"in r&&t(3,n=r.t),"data"in r&&t(4,i=r.data),"locale"in r&&t(0,l=r.locale)},s.$$.update=()=>{s.$$.dirty&9&&t(2,o=[{id:"tt",name:"Name",formatter:(r,m)=>g(`<a class="hover:underline" href="/${l}/languages/${m.cells[2].data}">
		  		<div class="font-medium text-gray-900 dark:text-stone-200">
					${m.cells[0].data??""}
				</div>
				<div class="text-gray-500 dark:text-stone-300">
					${m.cells[1].data??""}
				</div>
			</a>`)},{id:"tv",name:"Vernacular Name",hidden:!0},{id:"id",name:"iso"},{id:"po",name:n.population??"Population",formatter:r=>g(r?h.format(r):"-")},{id:"bc",name:"Bibles Count"},{id:"rc",name:"Resources Count"}]),s.$$.dirty&16&&t(1,e=i)},[l,e,o,n,i]}class L extends _{constructor(a){super(),b(this,a,q,V,v,{t:3,data:4,locale:0})}}export{L as default};
