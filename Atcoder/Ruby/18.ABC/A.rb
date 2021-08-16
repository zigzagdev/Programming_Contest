kes = gets.to_i
fuji = gets.to_i
moriyama = gets.to_i

evisjap = [kes,fuji,moriyama].sort.reverse

puts evisjap.index(kes)+1
puts evisjap.index(fuji)+1
puts evisjap.index(moriyama)+1
