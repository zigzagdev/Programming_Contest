evisjap,kes,fuji,moriyama = gets.split(" ").map &:to_s

evis = Array[evisjap,kes,fuji,moriyama].sort

jap= evis[3]+evis[1]
jap2 = evis[2]+evis[0]

p jap.to_i+jap2.to_i
