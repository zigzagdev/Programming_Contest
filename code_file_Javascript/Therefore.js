(arg => {
    const N = arg|0;
    switch( N % 10 ) {
        case 2:
        case 4:
        case 5:
        case 7:
        case 9: return console.log('hon');
        case 0:
        case 1:
        case 6:
        case 8: return console.log('pon');
        case 3: return console.log('bon');
    }
})(require('fs').readFileSync('/dev/stdin', 'utf8'))