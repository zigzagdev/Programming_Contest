kes,moriyama,fuji = gets.split(" ").map &:to_i

a = kes*moriyama
b = kes*fuji
c = moriyama*fuji

evis = (a+b+c)*2
puts evis

