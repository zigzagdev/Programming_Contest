kes = gets.chomp

evis = kes[0,2]
jap = kes[-2,2]

if(evis >'00' && evis <'13' && jap >'00' && jap <'13')
  puts "AMBIGUOUS"
elsif (evis >'00' && evis <'13' )
  puts "MMYY"
elsif (jap >'00' && jap <'13')
  puts "YYMM"
else
  puts "NA"
end  
