a,b=gets.split(" ").map &:to_i
s=gets.split(" ").map &:to_i

sum=s.inject(:+)

puts s.sort.reverse[b-1]*b*4<sum ? "yes":"No"
