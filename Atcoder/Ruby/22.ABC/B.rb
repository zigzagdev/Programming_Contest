mori = gets.to_i

fuji = []
mori.times do
  kes = gets.to_i
  fuji.push(kes)
end
evija = fuji
evisjap =  fuji.uniq

p evija.size-evisjap.size
