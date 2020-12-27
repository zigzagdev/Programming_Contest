k = gets.chomp.to_i
n = gets.chomp.split(" ").map(&:to_i)

puts k * (n[1]/k) >= n[0] ? "OK" : "NG"
