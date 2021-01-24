S=gets.to_s
if S =~ /(\w)\1{2,}/
  puts "Won"
else
  puts "Lost"
end
