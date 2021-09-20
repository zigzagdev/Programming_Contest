kes = gets.to_i

if kes < 40
  puts 40 -kes
elsif kes < 70
  puts 70 - kes
elsif kes < 90
  puts 90 - kes
else
  puts 'expert'
end  
