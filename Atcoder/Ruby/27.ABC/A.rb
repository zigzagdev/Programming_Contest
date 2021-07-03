moriyama,kes,fuji = gets.split(" ").map &:to_i

if(moriyama==kes)
  puts fuji
elsif(moriyama==fuji)
  puts kes
elsif(kes==fuji)
  puts moriyama
else
  puts moriyama
end  
