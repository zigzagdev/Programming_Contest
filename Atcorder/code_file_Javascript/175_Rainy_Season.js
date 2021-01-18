function Main(input) {
    const lines = input.split('\n');
    const S = lines[0];
    let answer = 0;
    if (S.match(/RRR/)) {
        answer = 3;
    } else if (S.match(/RR/)) {
        answer = 2;
    } else if (S.match(/R/)) {
        answer = 1;
    }
    console.log(answer);
}
//*この行以降は編集しないでください（標準入出力から一度に読み込み、Mainを呼び出します）
Main(require("fs").readFileSync("/dev/stdin", "utf8"));