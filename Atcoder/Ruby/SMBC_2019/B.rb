kes = gets.to_f

fuji = (kes/ 1.08).ceil

if (fuji*1.08).floor == kes
  puts fuji
else
  puts ':('
end  
