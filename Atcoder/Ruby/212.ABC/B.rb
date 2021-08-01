evis = gets.chomp.split("").map &:to_i

if (evis[0]==evis[1] && evis[1]==evis[2] && evis[2]==evis[3] )
  puts "Weak"
elsif ((evis[0]+1)%10 == evis[1] && (evis[1]+1)%10  == evis[2] && (evis[2]+1)%10 == evis[3])
  puts "Weak"
else
  puts"Strong"
end
