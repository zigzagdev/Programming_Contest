kes,moriyama,fuji = gets.split.map(&:to_i).sort.reverse

evis = kes.to_s
jap = moriyama.to_s

evisjap = evis+jap
evisjap = evisjap.to_i

puts evisjap + fuji
