function Main(line) {
    // 1行目がlines[0], 2行目がlines[1], …に入る
    lines = line.split("\n");

    var A = lines[0].split(" ").map(Number);
    var ans = Math.min.apply(null, A);
    console.log(ans)

//*この行以降は編集しないでください（標準入出力から一度に読み込み、Mainを呼び出します）
}
Main(require("fs").readFileSync("/dev/stdin", "utf8"));