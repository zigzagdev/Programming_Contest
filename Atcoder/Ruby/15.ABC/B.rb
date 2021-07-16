kes = gets.to_i
moriyama = gets.split(" ").map &:to_i

fuji = moriyama.select { |n| n > 0 }

evis = fuji.sum
jap = fuji.count

evisjap = evis/jap.to_f

puts evisjap.ceil
