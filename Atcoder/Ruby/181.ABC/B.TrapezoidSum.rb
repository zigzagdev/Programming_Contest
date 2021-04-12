n=gets.to_i

sum = 0

n.times {
  a,b=gets.chomp.split(" ").map(&:to_i);
  sum +=(a..b).sum
}

puts sum
