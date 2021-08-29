kes = gets.to_i

dimaria = kes.times.map{gets.chomp}.sort.uniq.size
if dimaria == kes
  puts "No"
else
  puts "Yes"
end  
