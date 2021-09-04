kes = gets.to_i
mori = gets.split.map(&:to_i)

fuji= []
kes.times do |i|
  fuji[mori[i]] = i +1
end
evis = fuji.drop(1)
print evis.join(' ')
