kes = gets.chomp

fuji = Hash.new(0)
mori = kes.scan(/./){|m| fuji[m] += 1}

yama = fuji.values

evis = yama.select { |n| n % 2 == 0 }

if (yama == evis)
  puts "Yes"
else
  puts "No"
end  
