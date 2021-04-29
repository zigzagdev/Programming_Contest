n=gets.to_i
s=gets.split.map(&:to_s)

count = Hash.new(0)
s.each do |elem|
  count[elem] += 1
  if((count.size)==4)
    puts 'Four'
    exit
  end
end
puts 'Three'
