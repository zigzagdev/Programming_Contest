moriyama,kes,fuji = gets.split(" ").map &:to_i

if(kes>=fuji)
  puts 'delicious'
elsif(fuji-kes<=moriyama)
  puts 'safe'
else
  puts 'dangerous'
end  
