n,r= gets.split.map(&:to_i)

if n<10
  puts 100*(10-n)+r
else
  puts r
end
