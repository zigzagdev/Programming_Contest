N,K= gets.split(" ").map &:to_i

if N%K==0
  puts 0
else
  puts 1
end
