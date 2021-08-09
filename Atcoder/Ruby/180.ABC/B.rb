kes  = gets.to_i
mori = gets.split(" ").map &:to_i

yama = 0
mori.each do |i|
  yama += i.abs
end
puts yama

evis = 0
mori.each do |i|
  evis += (i*i).abs
end
yama = Math.sqrt(evis)
p yama

puts mori.map(&:abs).max
