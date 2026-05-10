package main

import (
    "bufio"
    "fmt"
    "os"
    "strings"
)

var reader = bufio.NewReader(os.Stdin)

func main() {
    var n int
    var s string

    fmt.Scan(&n)
    fmt.Scan(&s)

    start := strings.Index(s, "|") + 1
    end := strings.LastIndex(s, "|")

    result := s[start:end]
    
    if strings.Contains(result, "*") {
      fmt.Println("in")
    } else {
      fmt.Println("out")
    }
}