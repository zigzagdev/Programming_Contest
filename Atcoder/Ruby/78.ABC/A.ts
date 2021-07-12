kes,moriyama,fuji = gets.split(" ").map &:to_i


puts (kes-fuji)/(moriyama+fuji).ceil