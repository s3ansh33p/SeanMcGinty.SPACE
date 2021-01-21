/* eslint-disable*/
//we use these characters for the solid lines
const solidChars =
  'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789+{}<>;';
// and these ones for empty space
const spaceChars = " `.,_-'";
const chars = [spaceChars, solidChars];
const colors = ['#e0e0e0', '#0000ff', '#ff00ff'];
const kp1 = 'aQwkl';
const kp2 = 'HilVr';
const kp3 = 'ZxoPe';
const kp4 = 'FdwUt';
const kp = [kp1, kp2, kp3, kp4]
//[Length, Nothing/Something, ColorIndex] | null: linebreak
const map = [ 
[5, 0, 0], [56, 1, 1], [5, 0, 0], null, 
[3, 0, 0], [60, 1, 1], [3, 0, 0], null, 
[1, 0, 0], [64, 1, 1], [1, 0, 0], null, 
[66, 1, 1], null, 
[10, 1, 1], [46, 0, 0], [10, 1, 1], null, 
[8, 1, 1], [50, 0, 0], [8, 1, 1], null, 
[8, 1, 1], [50, 0, 0], [8, 1, 1], null, 
[8, 1, 1], [58, 0, 0], null, 
[8, 1, 1], [58, 0, 0], null, 
[8, 1, 1], [58, 0, 0], null, 
[8, 1, 1], [58, 0, 0], null, 
[8, 1, 1], [58, 0, 0], null, 
[8, 1, 1], [58, 0, 0], null, 
[8, 1, 1], [58, 0, 0], null, 
[59, 1, 1], [7, 0, 0], null, 
[1, 0, 0], [61, 1, 1], [4, 0, 0], null, 
[2, 0, 0], [15, 1, 1], [7, 1, 2], [1, 6, 2], [6, 1, 2], [1, 7, 2], [8, 1, 2], [1, 8, 2], [2, 1, 2], [1, 9, 2], [5, 1, 2], [15, 1, 1], [2, 0, 0], null, 
[4, 0, 0], [61, 1, 1], [1, 0, 0], null, 
[7, 0, 0], [59, 1, 1], null, 
[57, 0, 0], [9, 1, 1], null, 
[58, 0, 0], [8, 1, 1], null, 
[58, 0, 0], [8, 1, 1], null, 
[58, 0, 0], [8, 1, 1], null, 
[58, 0, 0], [8, 1, 1], null, 
[58, 0, 0], [8, 1, 1], null, 
[58, 0, 0], [8, 1, 1], null, 
[8, 1, 1], [50, 0, 0], [8, 1, 1], null, 
[8, 1, 1], [50, 0, 0], [8, 1, 1], null, 
[10, 1, 1], [46, 0, 0], [10, 1, 1], null,
[66, 1, 1], null, 
[1, 0, 0], [64, 1, 1], [1, 0, 0], null, 
[3, 0, 0], [60, 1, 1], [3, 0, 0], null, 
[5, 0, 0], [56, 1, 1], [5, 0, 0] ]; 

// generate the ascii from the map
const ascii = map.reduce((agg, val) => {
  if (val === null) return agg + '\n';
  agg = agg += '%c';
  if (val[1] >= 6) {
    //Key Part 1 EK2021
    let characters = kp[(val[1]-6)].split('');
    const randChar = () =>
        characters[Math.floor(Math.random() * characters.length)];
            agg += randChar();
  } else {
    let characters = chars[val[1]].split('');
    const randChar = () =>
        characters[Math.floor(Math.random() * characters.length)];
        for (let i = 0; i < val[0]; i++) {
            agg += randChar();
        }
    }
  return agg;
}, '');

const colorStrings = map
  .filter(x => x !== null)
  .map(
    val => `color:${colors[val[2]]}; font-family: monospace, font-weight: bold`
  );

console.log(ascii, ...colorStrings);

//     >lu$mOOMMMOOMMOOOMOMOMMOOOOMMMOOMMMOMMOOOOOOOOMOOOO0Zn[<     
//   iXHWBHBHHgBRWgBBHBgQRQBQHBQHHRHBHgBQQgRBRWRWQWBHBHHWQgRQWRSi   
// _hBHQgQBHBBHHQRHQWWWWggQWQQgRRQWHBBgHHBWRRBHgWRBBWRQgQRHHHRWQgE+ 
//,GBBRBWgQRMMMOMOMMMMMOMOOOMMOMOOMMMOMMOOMOMMMMOOMOMOMMOORgHHHHRWM<
//fggWBRRBf!                                              ~TNgQHRWR#
//$WHHggH$                                                  2RRBWWWK
//5WWgQWQI                                                  sMMMMMOh
//5RWWRQR3                                                          
//kQgRBRg3                                                          
//kgRQBQBV                                                          
//XHWgHHW3                                                          
//$HgHHWWe                                                          
//$gRBRRQe                                                          
//ZRBWHWH0_                                                         
//iggQgBgW@C{xc}}{c[}x{}c}{l{{[]{77{xl7[}}c][{Ll7{]x][c}]v|r,       
// YHWBHRBRQggQQHBgBggRQQHQBRBggHRWBWBWHggBWRRgRWRQBRHRRHWQHg0u/    
//  )8gRRQHHQBgBHQQHRHWQRWQgQQHHWQRRgWRRRggWQWQQQWgQggBWWQQRWWBR8)  
//    \3OHBQQQWRHWHWQgBWRWgHQgWBggWWQHHHRWgQBHgQRWBRQWHQRQBgQQHHWRz 
//       >?Ll]cl[L{l]]{[Lx]c{cxl{L[l77l}{}{c{]Lxl}xLc7x7c1VDRBHWWRgi
//                                                         :ABRBQgRA
//                                                          CBgRHQgM
//                                                          oRQgWggM
//                                                          JQQRgQWM
//                                                          FggWHHWO
//                                                          uHBWHHgO
//                                                          ugRHgWHO
//oGm08U8z                                                  uBQRgWWM
//$WHgRQRZ                                                  uQHWWHR8
//FHBgHggH1,                                               {@BBRWHH3
//~MgHRHQgH@G69w%h96PE99S69SwSw6%AS9wP99AEE6Aw6h%9hP9SSP%8NBBWHWHQD<
// >9gQBggQRWQQggRHRQBQQHBBWQQQHWWWWQQWBWHRBWRBBBHgRRBBQHWQBWgQWHp; 
//   cKBQHgBRgWQHBWBgHHHHWBQBBRBWggRRWQHHBgBQHBHgHBRgWQRRHWgHBgUT   
//     >T39M&&D&@&N&@@N&NDDDD@&&@NN&D&D&N@&ND&@&ND@&@NDN&DM63T*     