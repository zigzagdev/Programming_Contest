kes = gets.to_i
evis,jap = gets.split(" ").map &:to_i
moriyama = gets.split(" ").map &:to_i

cashcash = 1000
fuji = []
closer = 0
kes.times do |i|
  evija = (jap-(evis-moriyama[i]*0.006)).abs
  if cashcash>evija
    cashcash = evija
    cashcash = i
  end
end
p cashcash+1
