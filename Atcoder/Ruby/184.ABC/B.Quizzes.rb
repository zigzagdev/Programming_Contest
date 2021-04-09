n,m=gets.split.map(&:to_i)
h=gets.strip.split("")

h.each do |h|

  if h== "o"
    m +=1
  else
    m += -1  if m>0
  end
end

puts m

