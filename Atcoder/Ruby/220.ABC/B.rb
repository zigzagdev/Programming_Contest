fuji = gets.to_i
mori,kes = gets.split(" ").map &:to_s

yama = mori.to_i(fuji)
evis = kes.to_i(fuji)

p yama*evis
