const num = 123;
const maxRedigit = function(num) {
   if(num < 100 || num > 999)
      return null
   return +num
   .toString()
   .split('')
   .sort((a, b) => b - a)
   .join('')
};
console.log(maxRedigit(num));