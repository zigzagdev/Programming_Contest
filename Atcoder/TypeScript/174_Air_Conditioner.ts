
function main(input) {
    const number = Number(input);
    if(number >= 30) console.log('Yes');
    else console.log('No');
}
main(require('fs').readFileSync('/dev/stdin', 'utf8'));