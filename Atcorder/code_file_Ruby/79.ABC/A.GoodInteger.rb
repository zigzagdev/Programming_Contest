n=gets.to_s

if n=~/(\w)\1{2,}/
  puts "Yes"
else
  puts "No"
end
