kes,moriyama = gets.split(" ").map &:to_i

evis = kes%moriyama
jap = moriyama-kes%moriyama.abs

puts [evis,jap].min
