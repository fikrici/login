const sentence = "hello world";

function reverseWords(sentence) {
    return sentence
        .split(/(\s+)/)
        .map(word => /^\s+$/.test(word) ? word : word.split('').reverse().join(''))
        .join('');
}

console.log(reverseWords(sentence));