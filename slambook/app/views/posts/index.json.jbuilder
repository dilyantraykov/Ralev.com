json.array!(@posts) do |post|
  json.extract! post, :id, :name, :address, :dob, :desire, :interests, :signature
  json.url post_url(post, format: :json)
end
