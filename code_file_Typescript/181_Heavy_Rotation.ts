import * as fs from 'fs';

const n: number = +fs.readFileSync('/dev/stdin', 'utf8').trim();
if (n % 2 === 0) {
    console.log('White');
} else {
    console.log('Black');
}