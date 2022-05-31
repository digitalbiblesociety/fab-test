async function a(s,r,t){const o=await s(`/data/${t!=null?t:r}.json`);return o.ok?{props:{[r]:await o.json()}}:{status:o.status,error:new Error(`Could not load ${t}.json`)}}export{a as F};
