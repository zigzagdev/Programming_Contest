n,k=gets.split.map(&:to_i)
i=gets.split.map(&:to_i)

count=0

i.each do |h|
  if(h>k-1)
    count +=1
  end
end

p count
