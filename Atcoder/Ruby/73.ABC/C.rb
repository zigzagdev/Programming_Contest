son = gets.to_i

mori = []
son.times do
  mori.push (gets.to_i)
end

taka = mori.group_by(&:itself).map{|k, v| [k, v.size]}.to_h

count = 0
taka.each do |key,value|
  if value %2 != 0
    count += 1
  end
end
p count
