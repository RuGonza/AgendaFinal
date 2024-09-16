<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                       <a href="{{ Route('Users.index') }}">
                          <div class="p-3">
                            <div class="bg-red-500 border border-gray-200 rounded shadow p-2">
                                <div class="flex items-center ">
                                      <div class="flex-shrink pr-4">
                                          <div class="rounded p-3 bg-greeb-300">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-white">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                </svg>

                                          </div>
                                      </div>
                                      <div class="flex-1 d text-right md:text-center">
                                        <h5 class="font-bold upparcase text-white">Barberos</h5>
                                        <h3 class="font-bold text-3xl text-white">{{$usuarios}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </a>
                       <a href="{{ Route('Agenda.index') }}">
                        <div class="p-3">
                          <div class="bg-black border border-gray-200 rounded shadow p-2">
                              <div class="flex items-center ">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-greeb-300">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                                          </svg>                                          

                                        </div>
                                    </div>
                                    <div class="flex-1 d text-right md:text-center">
                                      <h5 class="font-bold upparcase text-white">Cortes</h5>
                                      <h3 class="font-bold text-3xl text-white">{{$event}}</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                       </a>
                       <a href="{{ Route('Roles.index') }}">
                        <div class="p-3">
                          <div class="bg-gray-500 border border-gray-200 rounded shadow p-2">
                              <div class="flex items-center ">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-greeb-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                              </svg>

                                        </div>
                                    </div>
                                    <div class="flex-1 d text-right md:text-center">
                                      <h5 class="font-bold upparcase text-white">Roles</h5>
                                      <h3 class="font-bold text-3xl text-white">{{$roles}}</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                     </a>
                    
                  </div>