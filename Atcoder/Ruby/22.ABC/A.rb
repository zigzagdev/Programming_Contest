
kame,jin,koki = gets.split(" ").map &:to_i

weight = 0
count = 0

kame.times do
  weight += gets.to_i
  if weight >= jin && weight <= koki
    count += 1
  end
end

p count

