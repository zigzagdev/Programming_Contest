kes = gets.to_i

moriyama = kes.times.map { gets.to_s }

p moriyama.uniq.size
