n=gets.to_i
k=gets.split(" ").map &:to_i

n.times do |i|
  if k[i]%2==0 && k[i]%3!=0 && k[i]%5!=0
   puts 'DENIED'
  exit
  end
end
puts 'APPROVED'