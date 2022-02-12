mori = gets.to_i
yama = gets.split.map(&:to_i)


kes = 0
yama.each do |i|
  kes += i
end

fuji = 0
(1..mori).each do |i|
  fuji += i*4
end

puts fuji-kes
