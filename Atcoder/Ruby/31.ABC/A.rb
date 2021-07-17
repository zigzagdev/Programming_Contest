kes,moriyama = gets.split(" ").map &:to_i


if (kes+1)*moriyama >= (moriyama+1)*kes
  puts (kes+1)*moriyama
else
  puts (moriyama+1)*kes
end  
