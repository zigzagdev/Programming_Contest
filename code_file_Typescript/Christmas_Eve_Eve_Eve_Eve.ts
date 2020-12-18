const funcA = (input: string): string => {
    switch (Number(input)) {
        case 22: return 'Christmas Eve Eve Eve'
        case 23: return 'Christmas Eve Eve'
        case 24: return 'Christmas Eve'
        case 25: return 'Christmas'
    }
}

const hoge: string = funcA(require('fs').readFileSync('/dev/stdin', 'utf8'));
console.log(hoge);