fuji = gets.chomp
kes = gets.to_i

evis = fuji.split(//)

kes.times do
  mori,yama = gets.split(" ").map &:to_i
  evis[mori-1..yama-1] = evis[mori-1..yama-1].reverse
end
puts evis.join
